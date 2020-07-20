<?php
@session_start();

$Email = $_POST['Email'];
$to=$Email;
$_SESSION['Email'] =$to;
$_SESSION['Sdrn'] = $_POST['Sdrn'];
$_SESSION['First_name']= $_POST['First_name'];
$_SESSION['Middle_name']= $_POST['Middle_name'];
$_SESSION['Last_name']= $_POST['Last_name'];
$_SESSION['DOB']= $_POST['DOB'];
$_SESSION['Department']= $_POST['Department'];
$_SESSION['Contact_no']= $_POST['mobile'];
$_SESSION['Addr'] = $_POST['Address'];
$_SESSION['Doj']= $_POST['Doj'];
$_SESSION['Qualification']= $_POST['Qualification'];
$_SESSION['Desig']= $_POST['Desig'];
$_SESSION['Password'] = $_POST['Password'];



$otp = rand(100000, 999999);
$to=$Email;
$subject="otp verification";
$message="your otp is $otp";
$headers="From:sahilgaikwad2000@gmail.com";
mail($to,$subject,$message,$headers);

$_SESSION['otp']=$otp;
                
header("location:verification-form.php");
                
  
?>