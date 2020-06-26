<?php

include 'connect.php';

$id = $_GET['id'];

$a = "DELETE FROM `login_info` WHERE username='$id' ";
$b = " DELETE FROM `awards` WHERE Faculty_name='$id' ";
$c = " DELETE FROM `competitive_exam` WHERE Faculty_name='$id' ";
$d = " DELETE FROM `faculty_as_resource` WHERE Faculty_name='$id' ";
$e = " DELETE FROM `faculty_long_live` WHERE Faculty_name='$id' ";
$f = " DELETE FROM `qualification` WHERE Faculty_name='$id' ";
$g = " DELETE FROM `faculty_promotion` WHERE Faculty_name='$id' ";

 
mysqli_query($conn, $a);
mysqli_query($conn, $b);
mysqli_query($conn, $c);
mysqli_query($conn, $d);
mysqli_query($conn, $e);
mysqli_query($conn, $f);
mysqli_query($conn, $g);

header('location:hod1.php');

?>