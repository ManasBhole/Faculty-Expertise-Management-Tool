<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM faculty_promotion WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: detail.php"); 
?>