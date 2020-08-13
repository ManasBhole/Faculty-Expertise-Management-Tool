<?php 
    if(isset($_GET['table_id']) && isset($_GET['x']) && isset($_GET['y'])){
        $table_id=$_GET['table_id'];
        $x=$_GET['x'];
        $y=$_GET['y'];
    }
    else
        header("Location: ../finaldreport.php");

    $severname="localhost";
    $username="root";
    $password="";
    $dbname="faculty";

    $conn=mysqli_connect($severname,$username,$password);

    if(!$conn)
        die("Connection failed".mysqli_connect_error());

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
           
            $GLOBALS["activeSheet"]->setCellValue($cell,$attribute);
            $GLOBALS["activeSheet"]->getColumnDimension($char)->setAutoSize(true);
            $GLOBALS["activeSheet"]->getStyle($cell)->applyFromArray($styleArray);
            $char++;
        }
        $GLOBALS["activeSheet"]->getStyle("A:$char")->getAlignment()->setHorizontal('left');
        $GLOBALS["counter"]++;

        while($row = mysqli_fetch_row($result)){
           
            for($j=0,$char='A'; $j<mysqli_num_fields($result);$j++){
                $cell=$char.$GLOBALS["counter"];
                $attribute=$row[$j];

                $GLOBALS["activeSheet"]->setCellValue($cell,$attribute);
                $GLOBALS["activeSheet"]->getColumnDimension($char)->setAutoSize(true);
                $char++;
            }
            $GLOBALS["counter"]++;
            $GLOBALS["activeSheet"]->getStyle("A:$char")->getAlignment()->setHorizontal('left');
        }
    }

    if($table_id==1){
        if($x!="ALL" && $y=="ALL")
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date` FROM `faculty_as_resource` WHERE Resource_person='$x'
            ";
  
        elseif($x!="ALL" && $y!="ALL")
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date` FROM `faculty_as_resource` WHERE Resource_person='$x' AND Level='$y'
            ";
  
        elseif($x=="ALL" && $y!="ALL")
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date` FROM `faculty_as_resource` WHERE Level='$y'
            ";
        
        elseif($x=="ALL" && $y=="ALL"){
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Resource_person`, `Topic_name`, `Event_name`, `Level`, `Venue`, `Date` FROM `faculty_as_resource`
            ";
            if(isset($_GET['z'])){
                $z=$_GET['z'];
                $sql=$sql." WHERE Faculty_name LIKE '%".$z."%'";
            }
        }

        $result=$conn->query($sql);
        export($result,"Faculty As Resource");
        $filename='resource_person.xlsx';
    }
    
    elseif($table_id==2){
        $sql="
            SELECT `Sdrn`, `Faculty_name`, `Admitted_for_program`, `Specialization`, `Year_of_admission`, `University`, `Registration_number`, `College_name`, `Status`, `Research_topic`, `Guide_name` FROM `qualification`
        ";
        if(isset($_GET['z'])){
            $z=$_GET['z'];
            $sql=$sql." WHERE Faculty_name LIKE '%".$z."%'";
        }
        $result=$conn->query($sql);
        export($result,"Qualification");
        $filename='qualification.xlsx';
    }
    
    elseif($table_id==3){
        $sql="
            SELECT `Sdrn`, `Faculty_name`, `Date_of_joining`, `SDNR_number`, `RAIT_experience`, `Other_experience`, `Industry_experience`, `Total_experience`, `Starting_designation`, `Promotion_1`, `Date_promotion_1`, `Promotion_2`, `Date_promotion_2` FROM `faculty_promotion`
        "; 
        if(isset($_GET['z'])){
            $z=$_GET['z'];
            $sql=$sql." WHERE Faculty_name LIKE '%".$z."%'";
        }
        $result=$conn->query($sql);
        export($result,"Faculty Promotion");
        $filename='faculty_promotion.xlsx';
    }
    
    elseif($table_id==4){
        $sql="
            SELECT `Sdrn`, `Faculty_name`, `Reason_long_live`, `From_date`, `To_date`, `Date_of_joining_after_long_live` FROM `faculty_long_live`
        ";
        if(isset($_GET['z'])){
            $z=$_GET['z'];
            $sql=$sql." WHERE Faculty_name LIKE '%".$z."%'";
        }
        $result=$conn->query($sql);
        export($result,"Faculty Long Live");
        $filename='long_live.xlsx';
    }

    elseif($table_id==5){

        if($x=="ALL" && $y=="ALL"){
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Award_name`, `Title_of_innovation`, `Name_of_awardee`, `Position`, `Event_name`, `Awarding_agency`, `Category`, `Date`, `University`, `College_name`, `Level` FROM `awards`
            ";
            if(isset($_GET['z'])){
                $z=$_GET['z'];
                $sql=$sql." WHERE Faculty_name LIKE '%".$z."%'";
            }
        }
    
        elseif($x!="ALL" && $y=="ALL")
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Award_name`, `Title_of_innovation`, `Name_of_awardee`, `Position`, `Event_name`, `Awarding_agency`, `Category`, `Date`, `University`, `College_name`, `Level` FROM `awards` WHERE Position='$x'
            ";

        elseif($x=="ALL" && $y!="ALL")
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Award_name`, `Title_of_innovation`, `Name_of_awardee`, `Position`, `Event_name`, `Awarding_agency`, `Category`, `Date`, `University`, `College_name`, `Level` FROM `awards` WHERE Level='$y'
            ";  
        
        elseif($x!="ALL" && $y!="ALL")
            $sql="
                SELECT `Sdrn`, `Faculty_name`, `Award_name`, `Title_of_innovation`, `Name_of_awardee`, `Position`, `Event_name`, `Awarding_agency`, `Category`, `Date`, `University`, `College_name`, `Level` FROM `awards` WHERE Position='$x' AND Level='$y'
            ";

        $result=$conn->query($sql);
        export($result,"Awards");
        $filename='awards.xlsx';
    }
    
    elseif($table_id==6 && isset($_GET['z'])){
        $z=$_GET['z'];
        $sql="
        SELECT `Sdrn`, `Faculty_name`, `PET_appeared`, `PET_date`, `PET_score`, `GATE_appeared`, `GATE_date`, `GATE_score` FROM `competitive_exam` WHERE Faculty_name LIKE '%".$z."%'
        ";
        $result=$conn->query($sql);
        export($result,"PET");
        $filename='PET.xlsx';
    }

    elseif($table_id==6.1){
        $sql="
            SELECT `Sdrn`, `Faculty_name`, `PET_appeared`, `PET_date`, `PET_score` FROM `competitive_exam` WHERE PET_date>'$x-01-01' AND PET_date<'$y-01-01'
        ";
        $result=$conn->query($sql);
        export($result,"PET");
        $filename='PET.xlsx';
    }
    
    elseif($table_id==6.2){
        $sql="
            SELECT `Sdrn`, `Faculty_name`, `GATE_appeared`, `GATE_date`, `GATE_score` FROM `competitive_exam` WHERE GATE_date>'$x-01-01' AND GATE_date<'$y-01-01'
        ";
        $result=$conn->query($sql);
        export($result,"GATE");
        $filename='GATE.xlsx';
    }
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename='. $filename);
    header('Cache-Control: max-age=0');
    $Excel_writer->save('php://output');
?>