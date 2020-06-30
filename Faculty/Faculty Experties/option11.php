<?php
@session_start();
include('connect.php');
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
            $fileDestination="upload_files/resource_person/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
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
            $fileDestination="upload_files/exams/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
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
            $fileDestination="upload_files/qualification/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
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
            $fileDestination="upload_files/awards/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
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
            $fileDestination="upload_files/promotion/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
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

if(isset($_POST['submit6'])){
    $name5=$_SESSION['username'];
    $reason=$_POST['reason'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $longlive=$_POST['longlive'];

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
            $fileDestination="upload_files/long_live/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
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






if(!empty($name)){
    $q1="SELECT * FROM `faculty_as_resource` WHERE Faculty_name='$name' AND Resource_person='$sel1' AND Topic_name='$tpc' AND Event_name='$event' AND Level='$lvl' AND Venue='$venue' AND Date='$date'";
    $r1=mysqli_query($conn,$q1);
    
    if(mysqli_num_rows($r1)>0){
        $_SESSION['o1']=0;
        header('location:option1.php');
        
    }else{
    
        $query="INSERT INTO `faculty_as_resource`(`Faculty_name`,`Resource_person`,`Topic_name`,`Event_name`,`Level`,`Venue`,`Date`,`pdf`) VALUES('$name','$sel1','$tpc','$event','$lvl','$venue','$date','$fileDestination');";
        $_SESSION['s1']=0;
    mysqli_query($conn,$query);
    header('location:detail.php');
    }
    
    



}
if(!empty($name1)){
    $q1="SELECT * FROM `competitive_exam` WHERE Faculty_name='$name1' AND `PET_appeared`='$pet' AND `PET_date`='$pet_date' AND `PET_score`='$pet_score' AND `GATE_appeared`='$gate_appeared' AND `GATE_date`='$gate_date' AND `GATE_score`='$gate_score'";    
$r1=mysqli_query($conn,$q1);
if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option2.php');


}else{
$query1="INSERT INTO `competitive_exam`(`Faculty_name`,`PET_appeared`,`PET_date`,`PET_score`,`GATE_appeared`,`GATE_date`,`GATE_score`,`pdf`) VALUES('$name1','$pet','$pet_date','$pet_score','$gate_appeared','$gate_date','$gate_score','$fileDestination');";
$_SESSION['s1']=0;    
mysqli_query($conn,$query1);
    header('location:detail.php');
}
  
    
} 
if(!empty($name2)){
    $q1="SELECT * FROM `qualification` WHERE Faculty_name='$name2' AND `Admitted_for_program`='$program_name' AND `Specialization`='$spec' AND `Year_of_admission`='$addYear' AND `University`='$University' AND `Registration_number`='$Registration_no' AND `College_name`='$college_name' AND `Status`='$status' AND `Research_topic`='$topic_name' AND `Guide_name`='$guide_name'";
    $r1=mysqli_query($conn,$q1);
if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option3.php');
}else{
    
    $query2="INSERT INTO `qualification`(`Faculty_name`,`Admitted_for_program`,`Specialization`,`Year_of_admission`,`University`,`Registration_number`,`College_name`,`Status`,`Research_topic`,`Guide_name`,`pdf`) VALUES('$name2','$program_name','$spec','$addYear','$University','$Registration_no','$college_name','$status','$topic_name','$guide_name','$fileDestination');";
    $_SESSION['s1']=0;
    mysqli_query($conn,$query2);
    header('location:detail.php');
}

}


if(!empty($name3)){
    $q1="SELECT * FROM `awards` WHERE Faculty_name='$name3' AND Award_name='$award' AND Position='$position' AND Event_name='$eventname' AND University='$universityname' AND College_name='$collegename' AND Level='$lvl1'";
    $r1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option4.php');    
    }else{
    $query3="INSERT INTO `awards`(`Faculty_name`,`Award_name`,`Position`,`Event_name`,`University`,`College_name`,`Level`,`pdf`) VALUES('$name3','$award','$position','$eventname','$universityname','$collegename','$lvl1','$fileDestination' );";
    $_SESSION['s1']=0;
    mysqli_query($conn,$query3);
    header('location:detail.php');
    }


}

if(!empty($name4)){
    
    $q1="SELECT * FROM `faculty_promotion` WHERE Faculty_name='$name4' AND Date_of_joining='$join_date' AND SDNR_number='$sdrn' AND RAIT_experience='$rait_experience' AND Other_experience='$other_teaching_experience' AND Industry_experience='$industry_experience' AND Total_experience='$total_experience' AND Starting_designation='$designation' AND Promotion_1='$promoted_designation_1' AND Date_promotion_1='$promotion_first_date' AND Promotion_2='$promoted_designation_2' AND Date_promotion_2='$promotion_second_date'";
    $r1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option5.php'); 
    }else{    
    $query4="INSERT INTO `faculty_promotion`(`Faculty_name`,`Date_of_joining`,`SDNR_number`,`RAIT_experience`,`Other_experience`,`Industry_experience`,`Total_experience`,`Starting_designation`,`Promotion_1`,`Date_promotion_1`,`Promotion_2`,`Date_promotion_2`,`pdf` ) VALUES('$name4','$join_date','$sdrn','$rait_experience','$other_teaching_experience','$industry_experience','$total_experience','$designation','$promoted_designation_1','$promotion_first_date','$promoted_designation_2','$promotion_second_date','$fileDestination' );";
    $_SESSION['s1']=0;
    mysqli_query($conn,$query4);
    header('location:detail.php');
    }
    

}
if(!empty($name5)){
    $q1="SELECT * FROM `faculty_long_live` WHERE Faculty_name='$name5' AND Reason_long_live='$reason' AND From_date='$from_date' AND To_date='$to_date' AND Date_of_joining_after_long_live='$longlive'";
    $r1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($r1)>0){

        $_SESSION['o1']=1;
        header('location:option6.php');
    }else{
    
    $query5="INSERT INTO `faculty_long_live`(`Faculty_name`,`Reason_long_live`,`From_date`,`To_date`,`Date_of_joining_after_long_live`,`pdf`) VALUES('$name5','$reason','$from_date','$to_date','$longlive','$fileDestination' );";
    
    $_SESSION['s1']=0;
    mysqli_query($conn,$query5);
    header('location:detail.php');
    }
}

?>