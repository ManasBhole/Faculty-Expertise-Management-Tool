<!DOCTYPE html>
<html lang="en">




    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="individualstyle.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <title>Individual Report</title>
</head>
<body>

<h1>Individual Report</h1>

<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey;font-size:20px;font-family: sans-serif;" align="center" class="bold">            
             <td class="bold" style="color:blisque;padding:20px;"  >Faculty Name</td><td align="center">Award name</td><td align="center">Position</td><td align="center">Event name</td><td align="center">University</td>
            <td align="center">College name</td> <td align="center">Level</td>
        </tr>
                   



<?php

    @session_start();
    include('connect.php');
     
if ($_SESSION['logged_in'] = false) {
    $_SESSION['message'] = 'You must Login to continue use this section.';
    header('location: error.php');
} else {
	$username = $_SESSION['username'];
	echo " <div style='font-size: 20px; margin-left: 25px;font-family: 'Times New Roman', Times, serif;'> Faculty Name:"  . $username . "</div>";
    
   
}
	include('connect.php');
   
    $s="select * from awards where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:20px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:50px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:60px;text-align: center;'>$data[6]</td></tr>";
			}
			mysqli_close($conn);
			?>
</table>
</form>

<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey;font-size:20px;font-family: sans-serif;" align="center" class="bold">            
             <td class="bold" style="color:blisque;padding:20px;"  >Faculty Name</td><td align="center">PET Appered</td><td align="center">PET Date</td><td align="center">PET Score</td><td align="center">GATE Appred</td>
            <td align="center">GATE Date</td> <td align="center">GATE Score</td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from competitive_exam where Faculty_name='$username'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:20px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:50px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:60px;text-align: center;'>$data[6]</td></tr>";
			}
			mysqli_close($conn);
			?>
</table>
</form>
<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 
        <tr style="background-color:grey;font-size:20px;font-family: sans-serif;" align="center" class="bold">            
             <td class="bold" style="color:blisque;padding:20px;"  >Faculty Name</td><td align="center">Admitted Program</td><td align="center">Specialization</td><td align="center">Admission Year</td><td align="center">University</td>
            <td align="center">Registration No </td> <td align="center">College name</td><td align="center">Status </td> <td align="center">Reaserch topic </td><td align="center">Guide Name</td>
        </tr>           



<?php

	include('connect.php');
   
    $s="select * from qualification where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:20px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:50px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:60px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td><td  style=' padding-left:60px;text-align: center;'>$data[8]</td><td  style=' padding-left:60px;text-align: center;'>$data[9]</td></tr>";
			}
			mysqli_close($conn);
			?>
</table>
</form>

<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey;font-size:20px;font-family: sans-serif;" class="bold">            
             <td class="bold" style="color:blisque;padding:20px;"  >Faculty Name</td><td align="center">Resource person</td><td align="center">Topic Name</td><td align="center">Event Name</td><td align="center">Level</td>
            <td align="center">Venue </td> <td align="center">Date</td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_as_resource where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:20px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:50px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:60px;text-align: center;'>$data[6]</td></tr>";
			}
			mysqli_close($conn);
			?>
</table>
<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey;font-size:20px;font-family: sans-serif;" align="center" class="bold">            
             <td class="bold" style="color:blisque;padding:20px;"  >Faculty Name</td><td align="center">Reason Long live</td><td align="center">From Date</td><td align="center">To Date</td><td align="center">Date of joining after long live</td>
           
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_long_live where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:20px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:50px;text-align: center;'>$data[4]</td></tr>";
			}
			mysqli_close($conn);
			?>
            
</table>
</form>

<table  width="1500px" style="margin:auto;margin-bottom:50px;" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey;font-size:20px;font-family: sans-serif;" align="center" class="bold">            
             <td class="bold" style="color:blisque;padding:20px;"  >Faculty_Name</td><td align="center">Date of joining</td><td align="center">SDNR number</td><td align="center">RAIT Experience</td><td align="center">Other Experience</td>
            <td align="center">Industry Experience </td> <td align="center">Total Experience</td><td align="center">Starting Designation </td> <td align="center">1st Promotion</td><td align="center">1st Promotion Date</td><td align="center">2nd Promotion </td> <td align="center">2nd Promotion Date</td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_promotion where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:20px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:50px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:60px'>$data[6]</td><td  style=' padding-left:10px;text-align: center;'>$data[7]</td><td  style=' padding-left:10px'>$data[8]</td><td  style=' padding-left:20px'>$data[9]</td><td  style=' padding-left:20px;text-align: center;'>$data[10]</td><td  style=' padding-left:50px;text-align: center;'>$data[11]</td></tr>";
			}
			mysqli_close($conn);
			?>
      </table>
</form>
    
            </body>
</html>