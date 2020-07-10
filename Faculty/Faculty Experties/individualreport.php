<!DOCTYPE html>
<html lang="en">

<?php
 @session_start();
    include('connect.php');
     
if ($_SESSION['logged_in'] = false) {
    $_SESSION['message'] = 'You must Login to continue use this section.';
    
} else {
    $username = $_SESSION['username'];
    
    
   
}
?>

    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <script src="https://kit.fontawesome.com/16e94d9d43.js" crossorigin="anonymous"></script>

  


	<title>Individual Report</title>
	<style>
		h1{
    
    font-family: 'Times New Roman', Times, serif;
    font-size: 50px;
    text-align: center;
    
    margin-left: 20px;
}

th { 
  background: #333; 
  color: white; 
  font-weight: bold;
  text-align: center; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: center; 
}

  tr:nth-of-type(odd) { 
  background: #eee; 
}

  
	
	
	
	
	
	</style>
</head>
<body>

<h1>Individual Report</h1>
<?php echo "<p style='font-family: 'Times New Roman', Times, serif; margin:20px;' >Faculty Name: ".$username."</p>";?>


<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

<thead>
  

 <tr style="background-color:grey" >            
             <th>Award name</th><th >Position</th><th >Event_name</th><th >university</th>
            <th >College name</th> <th >level</th><th >Edit</th> <th >Delete</th><th>Preview</th>
            
        </tr>
                   

</thead>
<tbody>
<?php

   
   
	include('connect.php');
   
    $s="select * from awards where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
     
    
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px'>$data[2]</td><td  style=' padding-left:20px'>$data[3]</td><td  style=' padding-left:20px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:50px'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td>
                    
                
                     ";?>
                     <td style=' padding-left:10px'>
<a href="edit1.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px'>
<a href="delete1.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview1.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
         
	<?php } ?>
	</tbody>
</table>
</div>


<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  
<thead>
  
 
 <tr style="background-color:grey" align="center" class="bold">            
             <th >PET Appered</th><th >PET Date</th><th >PET Score</th><th >GATE Appred</th>
            <th >GATE Date</th> <th >GATE Score</th><th >Edit</th> <th>Delete</th> <th >Preview</th> 
            
        </tr>
                   
	</thead>

<tbody>
<?php

	include('connect.php');
   
    $s="select * from competitive_exam where Faculty_name='$username'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
				<td style=' padding-left:10px'>

<a href="edit2.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete2.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview2.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
	</tbody>
</table>
</div>



<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  
<thead> 
 
 
 <tr style="background-color:grey" >           
             <th >Admitted Program</th><th>Specialization</th><th >Admission Year</th><th >University</th>
            <th >Registration No </th> <th >College name</th><th >Status </th> <th >Reaserch topic </th><th >Guide Name</th>
            <th >Edit</th> <th >Delete</th> <th>Preview</th>
            
        </tr>           

	</thead>
	<tbody>

<?php

	include('connect.php');
   
    $s="select * from qualification where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td><td  style=' padding-left:60px;text-align: center;'>$data[8]</td><td  style=' padding-left:60px;text-align: center;'>$data[9]</td><td  style=' padding-left:60px;text-align: center;'>$data[10]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit3.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete3.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px;text-align: center;'>
<a href="preview3.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
			<?php } ?>
	</tbody>	
</table>
</div>

<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  

<thead> 
   
 
 <tr style="background-color:grey" align="center" class="bold">               
             <th >Resource person</th><th >Topic Name</th><th>Event Name</th><th >Level</th>
            <th >Venue </th> <th >Date</th>
            <th >Edit</th><th >Delete</th>  <th>Preview</th>
            
        </tr>
                   

	</thead>
<tbody>
<?php

	include('connect.php');
   
    $s="select * from faculty_as_resource where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit4.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete4.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview4.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
	</tbody>	
</table>
</div>
<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  
<thead>
   
 
 <tr style="background-color:grey" align="center" class="bold">          
             <th  >Reason Long live</th><th >From Date</th><th >To Date</th><th >Date of joining after long live</th>
            <th >Edit</th> <th ">Delete</th><th>Preview</th>
            
        </tr>
                   

	</thead>
<tbody>
<?php

	include('connect.php');
   
    $s="select * from faculty_long_live where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td>";?>
                <td style=' padding-left:10px'>
<a href="edit5.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete5.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview5.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
			<?php } ?>
	</tbody>	
</table>
</div>

<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  

<thead> 
 
   
 <tr style="background-color:grey" align="center" class="bold">        
             <th >Date of joining</th><th >SDNR number</th><th >RAIT Experience</th><th >Other Experience</th>
            <th >Industry Experience </th> <th >Total Experience</th><th >Starting Designation </th> <th >1st Promotion</th><th >1st Promotion Date</th><th >2nd Promotion </th> <th >2nd Promotion Date</th>
            <th >Edit</th> <th >Delete</th> <th>Preview</th>
            
        </tr>
                   


	</thead>
	<tbody>
<?php

	include('connect.php');
   
    $s="select * from faculty_promotion where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td><td  style=' padding-left:10px;text-align: center;'>$data[8]</td><td  style=' padding-left:10px'>$data[9]</td><td  style=' padding-left:20px'>$data[10]</td><td  style=' padding-left:20px;text-align: center;'>$data[11]</td><td  style=' padding-left:50px;text-align: center;'>$data[12]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit6.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete6.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview6.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
	</tbody>
      </table>
	  </div>

    
            </body>
</html>