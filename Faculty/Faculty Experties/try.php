<!DOCTYPE html>
<html lang="en">
<head>
	

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="try.css">   <!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> </head>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">  
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">YEARLY Report</div>
<img src="../img/rait logo.jpeg"  id=logo alt="#" >
</nav>

	
<form action="try.php" method="POST">
<label for="Name">Select Year :</label>
	<input class="text-black" class="form-control " type="text" name='year' placeholder="Enter Academic Year" id="example1" autocomplete="off" required>
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
		
		<div class="form-row">
		<label for="Name" id="semlabel">Select Semester :</label>
		
		<div class="col-3">	
		
        <select name="sem" class="form-control" id="Selectoption" placeholder="Select Semester" required>
        
		<option value="ALL">ALL</option>
		<option value="ODD">ODD SEM</option>
		<option value="EVEN">EVEN SEM</option>
		</select>
		</div>
		</div>
		<button type="submit"  name="submit" value="Submit Values" class="btn btn-dark">Submit</button>
</form>


<table  id="tabledata" class=" table table-striped table-hover table-bordered">
	<thead class="bg-dark text-white">
		<th>Sr. No.</th>
		<th>Faculty Name</th>
		<th>Resource Person</th>
		<th>Topic Name</th>
		<th>Event Name</th>
		<th>Level</th>
		<th>Venue</th>
		<th>Date</th>
		
	</thead>

	<?php 
	include('connect.php');
	if(isset($_POST['submit']))
	{
		$year=$_POST['year'];
		$sem=$_POST['sem'];
	}
	else
	{
		$sem="NONE";
	}

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
		else{
			$a=NULL;
			$b=NULL;
		}

		$sql="SELECT * FROM faculty_as_resource WHERE Date BETWEEN '$a' and '$b'";
		$res=mysqli_query($conn,$sql);
		

		if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='8' align='center'>No data for the Corresponding Date</td></tr>";
		}
		$count=1;
		while($data=mysqli_fetch_array($res))
		{
			echo"<tr>
			<td  style=' padding-left:10px'>$count</td>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[2]</td>
			<td  style=' padding-left:20px'>$data[3]</td>
			<td  style=' padding-left:20px'>$data[4]</td>
			<td  style=' padding-left:50px'>$data[5]</td>
			<td  style=' padding-left:50px'>$data[6]</td>
			<td  style=' padding-left:60px'>$data[7]</td>
			</tr>";
			$count++;
		}
	
	


	?>


</table>
<script>
$(document).ready(function() {
    $('#tabledata').DataTable( {
        "order": [[ 3, "desc" ], [ 0, 'asc' ]]
    } );
} );

</script>
<table id="tabledata2" class=" table table-striped table-hover table-bordered">
	<thead class="bg-dark text-white text-center">
		<th>Sr. No.</th>
		<th>Faculty Name</th>
		<th>Award Name</th>
		<th>Position</th>
		<th>Event Name</th>
		<th>University</th>
		<th>College Name</th>
		<th>Level</th>
		
	</thead>
	<?php 
	$sql="SELECT * FROM awards WHERE Date BETWEEN '$a' and '$b'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='8' align='center'>No data for the Corresponding Date</td></tr>";
		}
	$count=1;
	while($data=mysqli_fetch_array($res))
	{
		echo"<tr>
			<td  style=' padding-left:10px'>$count</td>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[2]</td>
			<td  style=' padding-left:20px'>$data[3]</td>
			<td  style=' padding-left:20px'>$data[4]</td>
			<td  style=' padding-left:50px'>$data[5]</td>
			<td  style=' padding-left:50px'>$data[6]</td>
			<td  style=' padding-left:60px'>$data[7]</td>
			</tr>";
			$count++;
	}
	?>

</table>
<script>
$(document).ready(function() {
    $('#tabledata2').DataTable( {
        "order": [[ 3, "desc" ], [ 0, 'asc' ]]
    } );
} );

</script>
<table id="tabledata3" class=" table table-striped table-hover table-bordered">
	<thead class="bg-dark text-white text-center">
		<th>Sr. No.</th>
		<th>Faculty Name</th>
		<th>PET Appeared</th>
		<th>PET Date </th>
		<th>PET Score</th>
		<!-- <th>GATE Appeared</th>
		<th>GATE Date</th>
		<th>GATE Scored</th> -->
		
	</thead>
	<?php 
	$sql="SELECT * FROM competitive_exam WHERE PET_date BETWEEN '$a' and '$b'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='5' align='center'>No data for the Corresponding Date</td></tr>";
		}
		$count=1;
	while($data=mysqli_fetch_array($res))
	{
		echo"<tr>
			<td  style=' padding-left:10px'>$count</td>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[2]</td>
			<td  style=' padding-left:20px'>$data[3]</td>
			<td  style=' padding-left:20px'>$data[4]</td>
			
			</tr>";
			$count++;
	}

	?>

</table>
<script>
$(document).ready(function() {
    $('#tabledata3').DataTable( {
        "order": [[ 3, "desc" ], [ 0, 'asc' ]]
    } );
} );

</script>
<table id="tabledata4" class=" table table-striped table-hover table-bordered">
	<thead class="bg-dark text-white text-center">
		<th>Sr. No.</th>
		<th>Faculty Name</th>
		
		<th>GATE Appeared</th>
		<th>GATE Date</th>
		<th>GATE Scored</th>
		
	</thead>
	<?php 
	$sql="SELECT * FROM competitive_exam WHERE GATE_date BETWEEN '$a' and '$b'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==0)
		{
			echo "<tr><td colspan='5' align='center'>No data for the Corresponding Date</td></tr>";
		}
		$count=1;
	while($data=mysqli_fetch_array($res))
	{
		echo"<tr>
			<td  style=' padding-left:10px'>$count</td>
			<td  style=' padding-left:10px'>$data[1]</td>
			<td  style=' padding-left:10px'>$data[5]</td>
			<td  style=' padding-left:20px'>$data[6]</td>
			<td  style=' padding-left:20px'>$data[7]</td>
			
			</tr>";
		$count++;
	}

	?>

</table>
<script>
$(document).ready(function() {
    $('#tabledata4').DataTable( {
        "order": [[ 3, "desc" ], [ 0, 'asc' ]]
    } );
} );

</script>




</body>

</html>