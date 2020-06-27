<?php
@session_start();
include('connect.php');

// Defining the size of bytes
define('KB', 1024);
define('MB', 1048576);

 

if(isset($_POST['submit1'])){
$name=$_SESSION['username'];
$sel1=$_POST['sel1'];
$tpc=$_POST['tpc'];
$event=$_POST['event'];
$lvl=$_POST['lvl'];
$venue=$_POST['venue'];
$date=$_POST['date'];
// Uploading the file
$file=$_FILES['file'];

$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];

$fileExt=explode(".", $fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf');
if(in_array($fileActualExt, $allowed))
{
    if($fileError==0){
        if($fileSize<4*MB){

            $fileNameNew=uniqid("",true).".".$fileActualExt;
            $fileDestination1="upload_files/resource_person/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination1);
            
        }
        else{
            echo "<script language='javascript'>alert('The Size of the file you are trying to upload exceeded the the size limit.\nTry Again.')</script>";
            header("Location:detail.php");
        }

    }
    else{
        echo "<script language='javascript'>alert('There was an error uploading your file.\nTry Again')</script>";
    header("Location:detail.php");
    }
}
else
{
    echo "<script language='javascript'>alert('You cannot upload files of this type!')</script>";
    header("Location:detail.php");
}
}

if(isset($_POST['submit2'])){
$name1=$_SESSION['username'];
$pet=$_POST['pet'];
$pet_date=$_POST['pet_date'];
$pet_score=$_POST['pet_score'];
$gate_appeared=$_POST['gate_appeared'];
$gate_date=$_POST['gate_date'];
$gate_score=$_POST['gate_score'];
}

if(isset($_POST['submit3'])){
$name2=$_SESSION['username'];
$program_name=$_POST['program_name'];
$spec=$_POST['spec'];
$addYear=$_POST['addYear'];
$University=$_POST['University'];
$Registration_no=$_POST['Registration_no'];
$college_name=$_POST['college_name'];
$status=$_POST['status'];
$topic_name=$_POST['topic_name'];
$guide_name=$_POST['guide_name'];

// Uploading the file
$file=$_FILES['file'];

$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];

$fileExt=explode(".", $fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf');
if(in_array($fileActualExt, $allowed))
{
    if($fileError==0){
        if($fileSize<4*MB){

            $fileNameNew=uniqid("",true).".".$fileActualExt;
            $fileDestination3="upload_files/qualification/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination3);
            
        }
        else{
            echo "<script language='javascript'>alert('The Size of the file you are trying to upload exceeded the the size limit.\nTry Again.')</script>";
            header("Location:detail.php");
        }

    }
    else{
        echo "<script language='javascript'>alert('There was an error uploading your file.\nTry Again')</script>";
    header("Location:detail.php");
    }
}
else
{
    echo "<script language='javascript'>alert('You cannot upload files of this type!')</script>";
    header("Location:detail.php");
}



}

if(isset($_POST['submit4'])){
$name3=$_SESSION['username'];
$award=$_POST['Award'];
$position=$_POST['position'];
$eventname=$_POST['Eventname'];
$universityname=$_POST['Universityname'];
$collegename=$_POST['collegename'];
$lvl1=$_POST['lvl1'];
}


if(isset($_POST['submit5'])){
$name4=$_SESSION['username'];
$join_date=$_POST['joindate'];
$sdrn=$_POST['sdrn'];
$rait_experience=$_POST['RAIT_experience'];
$other_teaching_experience=$_POST['Other_teaching_experience'];
$industry_experience=$_POST['Industry_experience'];
$total_experience=$_POST['Total_experience'];
$designation=$_POST['Designation'];
$promoted_designation_1=$_POST['Promoted_designation_1'];
$promotion_first_date=$_POST['Promotion_first_date'];
$promoted_designation_2=$_POST['Promoted_designation_2'];
$promotion_second_date=$_POST['Promotion_second_date'];
}

if(isset($_POST['submit6'])){
    $name5=$_SESSION['username'];
    $reason=$_POST['reason'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $longlive=$_POST['longlive'];
}






if(!empty($name)){
$query="INSERT INTO `faculty_as_resource`(`Faculty_name`,`Resource_person`,`Topic_name`,`Event_name`,`Level`,`Venue`,`Date`,`pdf`) VALUES('$name','$sel1','$tpc','$event','$lvl','$venue','$date','$fileDestination1');";

mysqli_query($conn,$query);
header('location:detail.php');



}
if(!empty($name1)){
    $query1="INSERT INTO `competitive_exam`(`Faculty_name`,`PET_appeared`,`PET_date`,`PET_score`,`GATE_appeared`,`GATE_date`,`GATE_score`) VALUES('$name1','$pet','$pet_date','$pet_score','$gate_appeared','$gate_date','$gate_score');";
    mysqli_query($conn,$query1);
    header('location:detail.php');
    
} 
if(!empty($name2)){
    $query2="INSERT INTO `qualification`(`Faculty_name`,`Admitted_for_program`,`Specialization`,`Year_of_admission`,`University`,`Registration_number`,`College_name`,`Status`,`Research_topic`,`Guide_name`,`pdf`) VALUES('$name2','$program_name','$spec','$addYear','$University','$Registration_no','$college_name','$status','$topic_name','$guide_name','$fileDestination3');";
    mysqli_query($conn,$query2);
    header('location:detail.php');



}


if(!empty($name3)){
    $query3="INSERT INTO `awards`(`Faculty_name`,`Award_name`,`Position`,`Event_name`,`University`,`College_name`,`Level`) VALUES('$name3','$award','$position','$eventname','$universityname','$collegename','$lvl1');";
    mysqli_query($conn,$query3);
    header('location:detail.php');


}

if(!empty($name4)){
    
    $query4="INSERT INTO `faculty_promotion`(`Faculty_name`,`Date_of_joining`,`SDNR_number`,`RAIT_experience`,`Other_experience`,`Industry_experience`,`Total_experience`,`Starting_designation`,`Promotion_1`,`Date_promotion_1`,`Promotion_2`,`Date_promotion_2`) VALUES('$name4','$join_date','$sdrn','$rait_experience','$other_teaching_experience','$industry_experience','$total_experience','$designation','$promoted_designation_1','$promotion_first_date','$promoted_designation_2','$promotion_second_date');";

    mysqli_query($conn,$query4);
    header('location:detail.php');
    

}
if(!empty($name5)){
    $query5="INSERT INTO `faculty_long_live`(`Faculty_name`,`Reason_long_live`,`From_date`,`To_date`,`Date_of_joining_after_long_live`) VALUES('$name5','$reason','$from_date','$to_date','$longlive');";
    mysqli_query($conn,$query5);
    header('location:detail.php');
}

?>