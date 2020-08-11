<?php @session_start();

    $Sdrn=$_SESSION['sdrn'];

    $severname="localhost";
    $username="root";
    $password="";
    $dbname="faculty";

    $conn=mysqli_connect($severname,$username,$password);

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }
    mysqli_select_db($conn, $dbname);

    require_once("vendor/autoload.php"); 
 
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    
    $spreadsheet = new Spreadsheet();
    $Excel_writer = new Xlsx($spreadsheet);
    
    $spreadsheet->setActiveSheetIndex(0);
    $activeSheet = $spreadsheet->getActiveSheet();
    $counter=1; 

    function export($result,$tb_name){

        $styleArray = array(
            'font'  => array(
                'color' => array('rgb' => '1cff00'),
                'bold'  => true,
                'italic'  => true,
        )); 

        $cell="A".$GLOBALS["counter"];
        $GLOBALS["activeSheet"]->setCellValue($cell,$tb_name);
        $GLOBALS["activeSheet"]->getStyle($cell)->applyFromArray($styleArray);
        $GLOBALS["counter"]++;

        $styleArray = ['font'=>['bold'=>true,],];

        for ($char='A';$property = mysqli_fetch_field($result);){
            $cell=$char.$GLOBALS["counter"];
            $attribute=$property->name;
           
            if($attribute=="First_name"||$attribute=="Middle_name")
                continue;
            elseif($attribute=="Last_name")
                $GLOBALS["activeSheet"]->setCellValue($cell,"Name");
            else
                $GLOBALS["activeSheet"]->setCellValue($cell,$attribute);
            
            $GLOBALS["activeSheet"]->getColumnDimension($char)->setAutoSize(true);
            $GLOBALS["activeSheet"]->getStyle($cell)->applyFromArray($styleArray);
            $char++;
        }
        $GLOBALS["activeSheet"]->getStyle("A:$char")->getAlignment()->setHorizontal('left');
        $GLOBALS["counter"]++;

        while($row = mysqli_fetch_row($result)){
            $name="";
            for($j=0,$char='A'; $j<mysqli_num_fields($result);$j++){
                $cell=$char.$GLOBALS["counter"];
                $attribute=$row[$j];

                if($GLOBALS["counter"]==3 && ($j==1||$j==2)){
                    $name=$name.$attribute." ";
                    continue;
                }
                elseif($GLOBALS["counter"]==3 && $j==3){
                    $name=$name.$attribute;
                    $GLOBALS["activeSheet"]->setCellValue($cell,$name);
                }
                else
                    $GLOBALS["activeSheet"]->setCellValue($cell,$attribute);
         
                $GLOBALS["activeSheet"]->getColumnDimension($char)->setAutoSize(true);
                $char++;
            }
            $GLOBALS["counter"]++;
            $GLOBALS["activeSheet"]->getStyle("A:$char")->getAlignment()->setHorizontal('left');
        }
        $GLOBALS["counter"]++;
    }

    $sql="
        SELECT `Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Department`, `Contact_no`, `Email`, `Doj`, `Qualification`, `Desig` FROM `faculty_info` WHERE Sdrn='$Sdrn';
    ";
    $result=$conn->query($sql);
    export($result,"Faculty Info");

    $sql="
        SELECT `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date` FROM `faculty_as_resource` WHERE Sdrn='$Sdrn';
    ";
    $result=$conn->query($sql);
    export($result,"Faculty As Resource");

    $sql="
        SELECT `PET_appeared`, `PET_date`, `PET_score`, `GATE_appeared`, `GATE_date`, `GATE_score` FROM `competitive_exam` WHERE Sdrn='$Sdrn';
    ";
    $result=$conn->query($sql);
    export($result,"Competitive Exams");

    $sql="
        SELECT `Admitted_for_program`, `Specialization`, `Year_of_admission`, `University`, `Registration_number`, `College_name`, `Status`, `Research_topic`, `Guide_name` FROM `qualification` WHERE Sdrn='$Sdrn';
    ";
    $result=$conn->query($sql);
    export($result,"Qualification");
    
    $sql="
        SELECT `Award_name`, `Title_of_innovation`, `Name_of_awardee`, `Position`, `Event_name`, `Awarding_agency`, `Category`, `Date`, `University`, `College_name`, `Level` FROM `awards` WHERE Sdrn='$Sdrn';
    ";
    $result=$conn->query($sql);
    export($result,"Awards");

    $sql="
        SELECT `Date_of_joining`, `RAIT_experience`, `Other_experience`, `Industry_experience`, `Total_experience`, `Starting_designation`, `Promotion_1`, `Date_promotion_1`, `Promotion_2`, `Date_promotion_2` FROM `faculty_promotion` WHERE Sdrn='$Sdrn';
        ";
    $result=$conn->query($sql);
    export($result,"Faculty Promotion");

    $sql="
        SELECT `Reason_long_live`, `From_date`, `To_date`, `Date_of_joining_after_long_live` FROM `faculty_long_live` WHERE Sdrn='$Sdrn';
    ";
    $result=$conn->query($sql);
    export($result,"Faculty Long Live");

    $filename = 'database.xlsx';
  
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename='. $filename);
    header('Cache-Control: max-age=0');
    $Excel_writer->save('php://output');
?>
