<!DOCTYPE html>
<html lang="en">
<head>
	

	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="hod1.css">
    <!-- CSS only -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> </head>
   
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>
	
<form action="try.php" method="POST">
	<input class="bg-dark text-white" class="form-control" type="text" name='year' placeholder="Enter Academic Year" id="example1" autocomplete="off" required>
<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                });  
            
            });
        </script>	
        <select name="sem" required>
        <option value="" disabled selected >SEMESTER</option>
		<option value="ALL">ALL</option>
		<option value="ODD">ODD SEM</option>
		<option value="EVEN">EVEN SEM</option>
	</select>
	<input type="submit" name="submit" value="Submit Values">
</form>


<table border="1" >
	<thead>
		<th>Faculty Name</th>
		<th>Resource Person</th>
		<th>Topic Name</th>
		<th>Event Name</th>
		<th>Level</th>
		<th>Venue</th>
		<th>Date</th>
		<th>pdf</th>
	</thead>

	<?php 
	include('connect.php');
	if(isset($_POST['submit']))
	{
		$year=$_POST['year'];
		$sem=$_POST['sem'];


		if($sem=="ALL")

		{
			$a=$year."-01-01"; 
			$b=$year."-12-31";
		}
		elseif ($sem=="ODD") {
				$a=$year."-07-01";
				$b=$year."-12-31";
			}
		elseif ($sem=="EVEN") {
				$yeari=(int)$year;
				$yeari+=1;
				$year=(string)$yeari;
				$a=$year."-01-01";
				$b=$year."-05-31";
		}

		$sql="SELECT * FROM faculty_as_resource WHERE Date BETWEEN '$a' and '$b'";
		$res=mysqli_query($conn,$sql);
		echo (mysqli_num_rows($res));

		if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='8' align='center'>No data for the Corresponding Date</td></tr>";
		}

		while($data=mysqli_fetch_array($res))
		{
			echo"<tr>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[2]</td>
			<td  style=' padding-left:20px'>$data[3]</td>
			<td  style=' padding-left:20px'>$data[4]</td>
			<td  style=' padding-left:50px'>$data[5]</td>
			<td  style=' padding-left:50px'>$data[6]</td>
			<td  style=' padding-left:60px'>$data[7]</td>
			<td  style=' padding-left:60px'>$data[8]</td></tr>";
		}
	}
	


	?>


</table>

<table border="1">
	<thead>
		<th>Faculty Name</th>
		<th>Award Name</th>
		<th>Position</th>
		<th>Event Name</th>
		<th>University</th>
		<th>College Name</th>
		<th>Level</th>
		<th>pdf</th>
	</thead>
	<?php 
	$sql="SELECT * FROM awards WHERE Date BETWEEN '$a' and '$b'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='8' align='center'>No data for the Corresponding Date</td></tr>";
		}
	while($data=mysqli_fetch_array($res))
	{
		echo"<tr>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[2]</td>
			<td  style=' padding-left:20px'>$data[3]</td>
			<td  style=' padding-left:20px'>$data[4]</td>
			<td  style=' padding-left:50px'>$data[5]</td>
			<td  style=' padding-left:50px'>$data[6]</td>
			<td  style=' padding-left:60px'>$data[7]</td>
			<td  style=' padding-left:60px'>$data[8]</td></tr>";
	}
	?>

</table>

<table border="1">
	<thead>
		<th>Faculty Name</th>
		<th>PET Appeared</th>
		<th>PET Date </th>
		<th>PET Score</th>
		<!-- <th>GATE Appeared</th>
		<th>GATE Date</th>
		<th>GATE Scored</th> -->
		<th>pdf</th>
	</thead>
	<?php 
	$sql="SELECT * FROM competitive_exam WHERE PET_date BETWEEN '$a' and '$b'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='5' align='center'>No data for the Corresponding Date</td></tr>";
		}
	while($data=mysqli_fetch_array($res))
	{
		echo"<tr>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[2]</td>
			<td  style=' padding-left:20px'>$data[3]</td>
			<td  style=' padding-left:20px'>$data[4]</td>
			
			<td  style=' padding-left:60px'>$data[8]</td></tr>";
	}

	?>

</table>

<table border="1">
	<thead>
		<th>Faculty Name</th>
		
		<th>GATE Appeared</th>
		<th>GATE Date</th>
		<th>GATE Scored</th>
		<th>pdf</th>
	</thead>
	<?php 
	$sql="SELECT * FROM competitive_exam WHERE GATE_date BETWEEN '$a' and '$b'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='5' align='center'>No data for the Corresponding Date</td></tr>";
		}
	while($data=mysqli_fetch_array($res))
	{
		echo"<tr>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[5]</td>
			<td  style=' padding-left:20px'>$data[6]</td>
			<td  style=' padding-left:20px'>$data[7]</td>
			
			<td  style=' padding-left:60px'>$data[8]</td></tr>";
	}

	?>

</table>





</body>
<style type="text/css">
	th{
		padding: 3px;
	}
	table{
		margin: 10px;
	}
</style>
</html>