<!doctype html>
<html lang="en">
<head>
 <style>
 	hr{
		background:black;
		height:3px;
	 }
	a,a:hover,a:active,a:visited{
		text-decoration: none !important;
		color: white !important;
	}
 </style>
</head>
<body>

<?php

	$connect = mysqli_connect("localhost", "root", "", "faculty");
	$output = '';

	if(isset($_POST["query"])){
		$search = mysqli_real_escape_string($connect, $_POST["query"]);
		$query = "
			SELECT * FROM faculty_as_resource WHERE Faculty_name LIKE '%".$search."%'
		";

		$result = mysqli_query($connect, $query);
?>

<br>

	<hr>
	<h2>FACULTY AS RESOURCE</h2>
	<table  id="tabledata" class=" table table-striped table-hover table-bordered">
		<tr class="bg-dark text-white text-center">
			<th> Username </th>
  			<th>SDRN</th>
			<th>Resource Person </th>
			<th> Topic Name</th>
			<th> Event Name</th>
			<th> Level</th>
			<th> Venue</th>
			<th> Date</th>
		</tr>
<?php	$counter=0;						
		while($row = mysqli_fetch_array($result)){ 
			$counter=1;
?>		
		<tr class="text-center">
				
			<td> <?php echo $row['Faculty_name'];?></td>
			<td> <?php echo $row['Sdrn'];?></td>
			<td> <?php echo $row['Resource_person'];?></td>
			<td> <?php echo $row['Topic_name']; ?> </td>
			<td> <?php echo $row['Event_name']; ?> </td>
			<td> <?php echo $row['Level']; ?> </td>
			<td> <?php echo $row['Venue']; ?> </td>
			<td> <?php echo $row['Date']; ?> </td>

		</tr>
<?php	}?>
		</table>
<?php
		if ($counter==0) 
			echo "<h4>DATA NOT FOUND<h4>";

		$q="ALL";$w="ALL";
		echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=1&x='.$q.'&y='.$w.'&z='.$search.'" class="btn-danger btn" style="position: inherit;">Excel Export</a></div>');

?>
			
<?php

$query = "
	SELECT * FROM qualification
	WHERE Faculty_name LIKE '%".$search."%'
";
	$result = mysqli_query($connect, $query);
?>

<hr>
<h2>QUALIFICATION</h2>
					
	<table  id="tabledata" class=" table table-striped table-hover table-bordered">
		<tr class="bg-dark text-white text-center">
							
			<th> Username </th>
			<th>SDRN</th>
			<th>Admitted for program </th>
			<th> Specialization</th>
			<th> Year of admission</th>
			<th> University</th>
			<th> Registration number</th>
			<th> College name</th>
			<th> Status</th>
			<th> Research topic</th>
			<th> Guide name</th>
		</tr>

<?php	$counter=0;						
	while($row = mysqli_fetch_array($result)){
		$counter=1;
?>
		<tr class="text-center">		
			<td> <?php echo $row['Faculty_name'];?></td>
			<td> <?php echo $row['Sdrn'];?></td>
			<td> <?php echo $row['Admitted_for_program'];?></td>
			<td> <?php echo $row['Specialization']; ?> </td>
			<td> <?php echo $row['Year_of_admission']; ?> </td>
			<td> <?php echo $row['University']; ?> </td>
			<td> <?php echo $row['Registration_number']; ?> </td>
			<td> <?php echo $row['College_name']; ?> </td>
			<td> <?php echo $row['Status']; ?> </td>
			<td> <?php echo $row['Research_topic']; ?> </td>
			<td> <?php echo $row['Guide_name']; ?> </td>
		</tr>
<?php	}?>
	</table>
<?php
		if ($counter==0) 
			echo "<h4>DATA NOT FOUND<h4>";

			$q="ALL";$w="ALL";
			echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=2&x='.$q.'&y='.$w.'&z='.$search.'" class="btn-danger btn" style="position: inherit;">Excel Export</a></div>');
	
?>

<?php
	$query = "
		SELECT * FROM competitive_exam WHERE Faculty_name LIKE '%".$search."%'
	";
	$result = mysqli_query($connect, $query);
?>
	<hr>
	<h2>COMPETITIVE EXAM</h2>
			<table  id="tabledata" class=" table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
							
				<th> Username </th>
				<th>SDRN</th>
				<th>PET appeared</th>
				<th> PET date</th>
				<th> PET score</th>
				<th> GATE appeared</th>
				<th> GATE date</th>
				<th> GATE score</th>
 
			</tr>
	<?php	$counter=0;				
		while($row = mysqli_fetch_array($result)){
			$counter=1;
	?>		
		<tr class="text-center">
			<td> <?php echo $row['Faculty_name'];?></td>
			<td> <?php echo $row['Sdrn'];?></td>
			<td> <?php echo $row['PET_appeared'];?></td>
			<td> <?php echo $row['PET_date']; ?> </td>
			<td> <?php echo $row['PET_score']; ?> </td>
			<td> <?php echo $row['GATE_appeared']; ?> </td>
			<td> <?php echo $row['GATE_date']; ?> </td>
			<td> <?php echo $row['GATE_score']; ?> </td>
		</tr>
<?php	}?>
	</table>
<?php
	if ($counter==0) 
		echo "<h4>DATA NOT FOUND<h4>";

		$q="ALL";$w="ALL";
		echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=6&x='.$q.'&y='.$w.'&z='.$search.'" class="btn-danger btn" style="position: inherit;">Excel Export</a></div>');
?>

<?php
	$query = "
		SELECT * FROM faculty_long_live WHERE Faculty_name LIKE '%".$search."%'
	";
	$result = mysqli_query($connect, $query);
?>
<hr>
<h2>FACULTY LONG LIVE</h2>
	
	<table  id="tabledata" class=" table table-striped table-hover table-bordered">
		<tr class="bg-dark text-white text-center">
			<th> Username </th>
			<th>SDRN</th>
			<th>Reason </th>
			<th> From date</th>
			<th> To date</th>
			<th> Date of joining after long live</th>
		</tr>
	
	<?php	$counter=0;				
		while($row = mysqli_fetch_array($result)){
			$counter=1;
	?>		
		
		<tr class="text-center">		
			<td> <?php echo $row['Faculty_name'];?></td>
			<td> <?php echo $row['Sdrn'];?></td>
			<td> <?php echo $row['Reason_long_live'];?></td>
			<td> <?php echo $row['From_date']; ?> </td>
			<td> <?php echo $row['To_date']; ?> </td>
			<td> <?php echo $row['Date_of_joining_after_long_live']; ?> </td>
    	</tr>

<?php	}?>
	</table>
<?php
	if ($counter==0) 
		echo "<h4>DATA NOT FOUND<h4>";
	
		$q="ALL";$w="ALL";
		echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=4&x='.$q.'&y='.$w.'&z='.$search.'" class="btn-danger btn" style="position: inherit;">Excel Export</a></div>');
?>

<?php
$query = "
	SELECT * FROM awards
	WHERE Faculty_name LIKE '%".$search."%'
	";
	$result = mysqli_query($connect, $query);
?>
<hr>
<h2>AWARDS</h2>
<table  id="tabledata" class=" table table-striped table-hover table-bordered">
    <tr class="bg-dark text-white text-center">
		<th> Username </th>
		<th>SDRN</th>
		<th>Award </th>
		<th>Title of innovation</th>
		<th>Name of Awardee</th>
		<th> Position</th>
		<th> Event Name</th>
		<th>Awarding Agency</th>
		<th>Category</th>
		<th> University</th>
		<th> College_name</th>
		<th> Level</th>
		<th>Date</th>
	</tr>
	<?php $counter=0;
	while($row=mysqli_fetch_assoc($result)){
		$counter=1;
	?>
      <tr class="text-center">
		<td> <?php echo $row['Faculty_name'];?></td>
		<td> <?php echo $row['Sdrn'];?></td>
		<td> <?php echo $row['Award_name'];?></td>
		<td> <?php echo $row['Title_of_innovation']; ?> </td>
		<td> <?php echo $row['Name_of_awardee']; ?> </td>
		<td> <?php echo $row['Position']; ?> </td>
		<td> <?php echo $row['Event_name']; ?> </td>
		<td> <?php echo $row['Awarding_agency']; ?> </td>
		<td> <?php echo $row['Category']; ?> </td>
		<td> <?php echo $row['University']; ?> </td>
		<td> <?php echo $row['College_name']; ?> </td>
		<td> <?php echo $row['Level']; ?> </td>
		<td> <?php echo $row['Date']; ?> </td> 
  </tr>
<?php	}?>
	</table>
<?php
	if ($counter==0) 
		echo "<h4>DATA NOT FOUND<h4>";
	
	$q="ALL";$w="ALL";
	echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=5&x='.$q.'&y='.$w.'&z='.$search.'" class="btn-danger btn" style="position: inherit;">Excel Export</a></div>');
?>

<?php
	$query = "
		SELECT * FROM faculty_promotion WHERE Faculty_name LIKE '%".$search."%'
	";
	$result = mysqli_query($connect, $query);
?>
<hr>
<h2>FACULTY PROMOTION</h2>
<table  id="tabledata" class=" table table-striped table-hover table-bordered">
    <tr class="bg-dark text-white text-center">
   
		<th> Username </th>
		<th>SDRN</th>
		<th>Date of joining</th>
		<th> RAIT experience</th>
		<th> Other experience</th>
		<th> Industry experience</th>
		<th> Total experience</th>
		<th> Starting designation</th>
		<th> Promotion 1</th>
		<th> Date of promotion 1</th>
		<th> Promotion 2</th>
		<th> Date of promotion 2</th>
	
    </tr >
	<?php $counter=0;
	while($row=mysqli_fetch_assoc($result)){
		$counter=1;
	?>
      <tr class="text-center">
      <td> <?php echo $row['Faculty_name'];?></td>
      <td> <?php echo $row['Date_of_joining'];?></td>
      <td> <?php echo $row['SDNR_number']; ?> </td>
      <td> <?php echo $row['RAIT_experience']; ?> </td>
      <td> <?php echo $row['Other_experience']; ?> </td>
      <td> <?php echo $row['Industry_experience']; ?> </td>
      <td> <?php echo $row['Total_experience']; ?> </td>
      <td> <?php echo $row['Starting_designation']; ?> </td>
      <td> <?php echo $row['Promotion_1']; ?> </td>
      <td> <?php echo $row['Date_promotion_1']; ?> </td>
      <td> <?php echo $row['Promotion_2']; ?> </td>
      <td> <?php echo $row['Date_promotion_2']; ?> </td>
  </tr>
  
<?php	}?>
	</table>
<?php
	if ($counter==0) 
		echo "<h4>DATA NOT FOUND<h4>";
	
	$q="ALL";$w="ALL";
	echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=3&x='.$q.'&y='.$w.'&z='.$search.'" class="btn-danger btn" style="position: inherit;">Excel Export</a></div>');
}?>

</body>
</html>
