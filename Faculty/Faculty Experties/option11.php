<?php
@session_start();
include('connect.php');
 

if(isset($_POST['submit1'])){
$name=$_POST['name'];
$sel1=$_POST['sel1'];
$tpc=$_POST['tpc'];
$event=$_POST['event'];
$lvl=$_POST['lvl'];
$venue=$_POST['venue'];
$date=$_POST['date'];

}

if(isset($_POST['submit2'])){
$name1=$_POST['nam'];
$pet=$_POST['pet'];
$pet_date=$_POST['pet_date'];
$pet_score=$_POST['pet_score'];
$gate_appeared=$_POST['gate_appeared'];
$gate_date=$_POST['gate_date'];
$gate_score=$_POST['gate_score'];
}

if(isset($_POST['submit3'])){
$name2=$_POST['name1'];
$program_name=$_POST['program_name'];
$spec=$_POST['spec'];
$addYear=$_POST['addYear'];
$University=$_POST['University'];
$Registration_no=$_POST['Registration_no'];
$college_name=$_POST['college_name'];
$status=$_POST['status'];
$topic_name=$_POST['topic_name'];
$guide_name=$_POST['guide_name'];
}

if(isset($_POST['submit4'])){
$name3=$_POST['name2'];
$award=$_POST['Award'];
$position=$_POST['position'];
$eventname=$_POST['Eventname'];
$universityname=$_POST['Universityname'];
$collegename=$_POST['collegename'];
$lvl1=$_POST['lvl1'];
}


if(isset($_POST['submit5'])){
$name4=$_POST['name3'];
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
    $name5=$_POST['name4'];
    $reason=$_POST['reason'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $longlive=$_POST['longlive'];
}






if(!empty($name)){
$query="INSERT INTO `faculty_as_resource`(`Faculty_name`,`Resource_person`,`Topic_name`,`Event_name`,`Level`,`Venue`,`Date`) VALUES('$name','$sel1','$tpc','$event','$lvl','$venue','$date');";

mysqli_query($conn,$query);
header('location:detail.php');



}
if(!empty($name1)){
    $query1="INSERT INTO `competitive_exam`(`Faculty_name`,`PET_appeared`,`PET_date`,`PET_score`,`GATE_appeared`,`GATE_date`,`GATE_score`) VALUES('$name1','$pet','$pet_date','$pet_score','$gate_appeared','$gate_date','$gate_score');";
    mysqli_query($conn,$query1);
    header('location:detail.php');
    
} 
if(!empty($name2)){
    $query2="INSERT INTO `qualification`(`Faculty_name`,`Admitted_for_program`,`Specialization`,`Year_of_admission`,`University`,`Registration_number`,`College_name`,`Status`,`Research_topic`,`Guide_name`) VALUES('$name2','$program_name','$spec','$addYear','$University','$Registration_no','$college_name','$status','$topic_name','$guide_name');";
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