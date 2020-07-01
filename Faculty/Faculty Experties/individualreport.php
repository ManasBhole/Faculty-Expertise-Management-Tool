<!DOCTYPE html>
<html lang="en">




    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="individualstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <title>Individual Report</title>
</head>
<body>

<h1>Individual Report</h1>

<table  width="1400px" style="margin:auto" >

  
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">            
             <td class="bold" style="color:blisque"  >Faculty_Name</td><td align="center">Award_name</td><td align="center">Position</td><td align="center">Event_name</td><td align="center">university</td>
            <td align="center">College name</td> <td align="center">level</td><td align="center">Edit</td> <td align="center"></td><td align="center">Delete</td> <td align="center"></td>
        </tr>
                   



<?php

    @session_start();
    include('connect.php');
     
if ($_SESSION['logged_in'] = false) {
    $_SESSION['message'] = 'You must Login to continue use this section.';
    
} else {
    $username = $_SESSION['username'];
    echo "<p style='font-family: 'Times New Roman', Times, serif; margin:20px;' >Faculty Name: ".$username."</p>";
    
   
}
	include('connect.php');
   
    $s="select * from awards where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:10px'>$data[2]</td><td  style=' padding-left:20px'>$data[3]</td><td  style=' padding-left:20px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:50px'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td>
                    
                
                     ";?>
                     <td style=' padding-left:10px'>
<a href="edit.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white">Edit</button></a>
</td>

<td style=' padding-left:10px'>
<a href="delete1.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white">Delete</button></a>
</td>
            

          </tr>           
	<?php } ?>
</table>
</form>

<table  width="1400px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">            
             <td class="bold" style="color:blisque"  >Faculty Name</td><td align="center">PET Appered</td><td align="center">PET Date</td><td align="center">PET Score</td><td align="center">GATE Appred</td>
            <td align="center">GATE Date</td> <td align="center">GATE Score</td><td align="center">Edit</td> <td align="center"></td><td align="center">Delete</td> <td align="center"></td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from competitive_exam where Faculty_name='$username'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
				<td style=' padding-left:10px'>

<a href="edit2.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white">Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete2.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white">Delete</button></a>
</td>
</tr>
			<?php } ?>
</table>
</form>



 <table  width="1400px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">           
             <td class="bold" style="color:blisque"  >Faculty Name</td><td align="center">Admitted Program</td><td align="center">Specialization</td><td align="center">Admission Year</td><td align="center">University</td>
            <td align="center">Registration No </td> <td align="center">College name</td><td align="center">Status </td> <td align="center">Reaserch topic </td><td align="center">Guide Name</td>
            <td align="center">Edit</td> <td align="center"></td><td align="center">Delete</td> <td align="center"></td>
        </tr>           



<?php

	include('connect.php');
   
    $s="select * from qualification where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td><td  style=' padding-left:60px;text-align: center;'>$data[8]</td><td  style=' padding-left:60px;text-align: center;'>$data[9]</td><td  style=' padding-left:60px;text-align: center;'>$data[10]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit3.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white">Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete3.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white">Delete</button></a>
</td>
</tr>
			<?php } ?>
			
</table>
</form>

<table  width="1400px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">               
             <td class="bold" style="color:blisque"  >Faculty Name</td><td align="center">Resource person</td><td align="center">Topic Name</td><td align="center">Event Name</td><td align="center">Level</td>
            <td align="center">Venue </td> <td align="center">Date</td>
            <td align="center">Edit</td> <td align="center"></td><td align="center">Delete</td> <td align="center"></td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_as_resource where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit4.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white">Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete4.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white">Delete</button></a>
</td>
</tr>
			<?php } ?>
			
</table>
<table  width="1400px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">          
             <td class="bold" style="color:blisque"  >Faculty Name</td><td align="center">Reason Long live</td><td align="center">From Date</td><td align="center">To Date</td><td align="center">Date of joining after long live</td>
            <td align="center">Edit</td> <td align="center"></td><td align="center">Delete</td> <td align="center"></td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_long_live where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td>";?>
                <td style=' padding-left:10px'>
<a href="edit5.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white">Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete5.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white">Delete</button></a>
</td>
</tr>
			<?php } ?>
			
</table>
</form>

<table  width="1400px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">        
             <td class="bold" style="color:blisque"  >Faculty_Name</td><td align="center">Date of joining</td><td align="center">SDNR number</td><td align="center">RAIT Experience</td><td align="center">Other Experience</td>
            <td align="center">Industry Experience </td> <td align="center">Total Experience</td><td align="center">Starting Designation </td> <td align="center">1st Promotion</td><td align="center">1st Promotion Date</td><td align="center">2nd Promotion </td> <td align="center">2nd Promotion Date</td>
            <td align="center">Edit</td> <td align="center"></td><td align="center">Delete</td> <td align="center"></td>
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_promotion where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[1]</td><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td><td  style=' padding-left:10px;text-align: center;'>$data[8]</td><td  style=' padding-left:10px'>$data[9]</td><td  style=' padding-left:20px'>$data[10]</td><td  style=' padding-left:20px;text-align: center;'>$data[11]</td><td  style=' padding-left:50px;text-align: center;'>$data[12]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit6.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white">Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete6.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white">Delete</button></a>
</td>
</tr>
			<?php } ?>
      </table>
</form>
    
            </body>
</html>