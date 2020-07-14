<!doctype html>

<html lang="en">
<head>
 <title></title>

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
   <style type="text/css">     
    select {
        position:absolute;
        right:895px;
        width:200px;
        height:32px;
        top : 45px;
    }
    .navbar_title{
    font-family: 'Times New Roman', Times, serif;
    font-size: 50px;
    color: whitesmoke;
}
.navbar{
    height: 110px;
}
#logo{
    height: 70px;
    width: 130px;
    margin-left: auto;
}
    input{
      
      position:absolute;
      top:45px;
      height:32px;
      right:700px;
    }
    button{
      font-family: 'Arial'; 
      font-size: 50px;
      position:absolute;
      top:45px;
      right :15px;
      height:32px;
      
    }
    .op1,.op3,.op4{
      position:absolute;
        right:730px;
        width:150px;
        height:32px;
        top : 45px;
    }
    .op2{
        position:absolute;
        right:570px;
        width:150px;
        height:32px;
        top : 45px;
    }
    .op5{
      position:absolute;
        right:570px;
        width:150px;
        height:32px;
        top : 45px;

    }
    
</style>
<script language="javascript">
function populate(){
  if(document.getElementById('exam1').value=="FACULTY AS RESOURCE"){
    document.getElementById('op1').style.visibility="visible";
    document.getElementById('op2').style.visibility="visible";
    document.getElementById('op3').style.visibility="hidden";
    document.getElementById('op1').required=true;
    document.getElementById('op2').required=true;
    document.getElementById('op3').required=false;
    document.getElementById('op4').required=false;
    document.getElementById('example1').required=false;
  }
  else if(document.getElementById('exam1').value=="AWARDS"){
    document.getElementById('op1').required=false;
    document.getElementById('op3').required=true;
    document.getElementById('op2').required=true;
    document.getElementById('op4').required=false;
    document.getElementById('example1').required=false;
    document.getElementById('op3').style.visibility="visible";
    document.getElementById('op1').style.visibility="hidden";
    document.getElementById('op2').style.visibility="visible";
  }
  else if(document.getElementById('exam1').value=="COMPETITIVE EXAMS"){
    document.getElementById('op1').required=false;
    document.getElementById('op3').required=false;
    document.getElementById('op2').required=false;
    document.getElementById('op4').required=true;
    document.getElementById('example1').required=true;
    document.getElementById('op1').style.visibility="hidden";
    document.getElementById('op2').style.visibility="hidden";
    document.getElementById('op3').style.visibility="hidden";
    document.getElementById('op4').style.visibility="visible";
    document.getElementById('example1').style.visibility="visible";
    
  }

  else{
    document.getElementById('op1').required=false;
    document.getElementById('op2').required=false;
    document.getElementById('op3').required=false;
    document.getElementById('op4').required=false;
    document.getElementById('example1').required=false;
    document.getElementById('op1').style.visibility="hidden";
    document.getElementById('op2').style.visibility="hidden";
    document.getElementById('op3').style.visibility="hidden";
    document.getElementById('op4').style.visibility="hidden";
    document.getElementById('example1').style.visibility="hidden";
    
  }


}
</script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Department Report</div>
<img src="../img/rait logo.jpeg"  id=logo alt="#" >
</nav>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 
<br>

 <form action='finaldreport.php' method="POST">
                   
<input class="op5 bg-dark text-white" class="form-control" type="text" name='year' placeholder="Enter Year" id="example1" autocomplete="off" style="visibility:hidden">
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
        
  <select class="bg-dark text-white" name="exam1" id="exam1" required onchange="populate()">
  <option value="" selected disabled hidden>SELECT AN OPTION</option>
  <option value="FACULTY AS RESOURCE">FACULTY AS RESOURCE</option>
  <option value="QUALIFICATION">QUALIFICATION</option>
  <option value="FACULTY PROMOTION">FACULTY PROMOTION</option>
  <option value="FACULTY LONG LIVE">FACULTY LONG LIVE</option>
  <option value="AWARDS">AWARDS</option>
  <option value="COMPETITIVE EXAMS">COMPETITIVE EXAMS</option>
  
</select>

<div style="visibility:hidden">
<select class="op1 bg-dark text-white" name="op1" id="op1">
<option value="" selected disabled hidden>SELECT</option>
<option value="ALL">ALL</option>
<option value="Expert speaker">Expert speaker</option>
<option value="Judge">Judge</option>
<option value="Chairperson">Chairperson</option>
<option value="Reviewer (for paper orPh.D. related)">Reviewer</option>
<option value="Lectures in Industry">Lectures in industry</option>
</select>
</div>

<div style="visibility:hidden">
<select class="op2 bg-dark text-white" name="op2" id="op2">
<option value="" selected disabled hidden>SELECT LEVEL</option>
<option value="ALL">ALL</option>
<option value="Local level">Local level</option>
<option value="State level">State level</option>
<option value="National level">National level</option>
<option value="International level">International level</option>
</select>
</div>

<div style="visibility:hidden">
<select class="op3 bg-dark text-white" name="op3" id="op3">
<option value="" selected disabled hidden>SELECT</option>
<option value="ALL">ALL</option>
<option value="1st">1st</option>
<option value="2nd">2nd</option>
<option value="3rd">3rd</option>
<option value="participating">Participating</option>
</select>
</div>

<div style="visibility:hidden">
<select class="op4 bg-dark text-white" name="op4" id="op4">
<option value="" selected disabled hidden>SELECT</option>
<option value="PET">PET</option>
<option value="GATE">GATE</option>
</select>
</div>

<div class="btn">
    <button type="submit" name="submit" class="btn btn-dark">Search</button>
      </div>
  </form> 
 

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 

<?php
@session_start();
include('connect.php');
if(isset($_POST['exam1'])){
$_SESSION['exam']=$_POST['exam1'];

if($_SESSION['exam']=='FACULTY AS RESOURCE'){?>
  
  <tr class="bg-dark text-white text-center">
 
 
  <th> Username </th>
  <th>Resource Person </th>
  <th> Topic Name</th>
  <th> Event Name</th>
  <th> Level</th>
  <th> Venue</th>
  <th> Date</th>
 
 
  </tr >
 <?php
  if((($_POST['op1'])!="ALL") && ($_POST['op2']=="ALL")){
    $q=$_POST['op1'];
    $query="SELECT * FROM `faculty_as_resource` WHERE Resource_person='$q'";
  
  }
  if((($_POST['op1'])!="ALL" ) && (($_POST['op2'])!="ALL")){
    $q=$_POST['op1'];
    $w=$_POST['op2'];
    $query="SELECT * FROM `faculty_as_resource` WHERE Resource_person='$q' AND Level='$w'";
  
  }
  if(($_POST['op1']=="ALL") && ($_POST['op2']!="ALL")){
    $w=$_POST['op2'];
    $query="SELECT * FROM `faculty_as_resource` WHERE Level='$w'";
  }
  if(($_POST['op1']=="ALL") && ($_POST['op2']=="ALL")){
    $query="SELECT * FROM `faculty_as_resource`";
  
  }

  $result=mysqli_query($conn,$query);
  while($row=mysqli_fetch_assoc($result)){?>
    <tr class="text-center">
    <td> <?php echo $row['Faculty_name'];?></td>
    <td> <?php echo $row['Resource_person'];?></td>
    <td> <?php echo $row['Topic_name']; ?> </td>
    <td> <?php echo $row['Event_name']; ?> </td>
    <td> <?php echo $row['Level']; ?> </td>
    <td> <?php echo $row['Venue']; ?> </td>
    <td> <?php echo $row['Date']; ?> </td>
    
</tr>
    
<?php   
  
}
}
if($_SESSION['exam']=='QUALIFICATION'){?>
  <tr class="bg-dark text-white text-center">
 
 
 <th> Username </th>
 <th>Admitted for program </th>
 <th> Specialization</th>
 <th> Year of admission</th>
 <th> University</th>
 <th> Registration number</th>
 <th> College name</th>
 <th> Status</th>
 <th> Research topic</th>
 <th> Guide name</th>
 


 </tr >

<?php

$query="SELECT * FROM `qualification`";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr class="text-center">
    <td> <?php echo $row['Faculty_name'];?></td>
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
<?php
}
}
if($_SESSION['exam']=='FACULTY PROMOTION'){?>
  
    <tr class="bg-dark text-white text-center">
   
   
    <th> Username </th>
    <th>Date of joining</th>
    <th> SDNR number</th>
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
   <?php
    $query="SELECT * FROM `faculty_promotion`"; 
    $result=mysqli_query($conn,$query);
  
  while($row=mysqli_fetch_assoc($result)){?>
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
  

<?php
}
}
if($_SESSION['exam']=='FACULTY LONG LIVE'){?>
  
    <tr class="bg-dark text-white text-center">
   
   
    <th> Username </th>
    <th>Reason</th>
    <th> From date</th>
    <th> To date</th>
    <th> Date of joining</th>
   
   
   
    </tr >
   <?php
    $query="SELECT * FROM `faculty_long_live` ";
    $result=mysqli_query($conn,$query);
  
  while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr class="text-center">
      <td> <?php echo $row['Faculty_name'];?></td>
      <td> <?php echo $row['Reason_long_live'];?></td>
      <td> <?php echo $row['From_date']; ?> </td>
      <td> <?php echo $row['To_date']; ?> </td>
      <td> <?php echo $row['Date_of_joining_after_long_live']; ?> </td>
      
      
  </tr>
<?php  
}
}
if($_SESSION['exam']=='AWARDS'){?>
  
    <tr class="bg-dark text-white text-center">
   
   
    <th> Username </th>
    <th>Award </th>
    <th> Position</th>
    <th> Event Name</th>
    <th> University</th>
    <th> College_name</th>
    <th> Level</th>
   
   
    </tr >
   <?php
    if(($_POST['op3']=="ALL") && ($_POST['op2']=="ALL")){
    $query="SELECT * FROM `awards`";
    }
    if(($_POST['op3']!="ALL") && ($_POST['op2']=="ALL")){
      $e=$_POST['op3'];
      $query="SELECT * FROM `awards` WHERE Position='$e'";

    }
    if(($_POST['op3']=="ALL") && ($_POST['op2']!="ALL")){
      $w=$_POST['op2'];
      $query="SELECT * FROM `awards` WHERE Level='$w'";  
    }
    if(($_POST['op2']!="ALL") && ($_POST['op3']!="ALL")){
      $e=$_POST['op3'];
      $w=$_POST['op2'];
      $query="SELECT * FROM `awards` WHERE Position='$e' AND Level='$w'";
    }

    
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){?>
      <tr class="text-center">
      <td> <?php echo $row['Faculty_name'];?></td>
      <td> <?php echo $row['Award_name'];?></td>
      <td> <?php echo $row['Position']; ?> </td>
      <td> <?php echo $row['Event_name']; ?> </td>
      <td> <?php echo $row['University']; ?> </td>
      <td> <?php echo $row['College_name']; ?> </td>
      <td> <?php echo $row['Level']; ?> </td>
      
  </tr>
<?php  
}
}
if($_SESSION['exam']=='COMPETITIVE EXAMS'){
  $p=$_POST['year'];
  $z=$p+1;

if($_POST['op4']=='PET'){?>
  
  <tr class="bg-dark text-white text-center">
 
 
  <th> Username </th>
  <th>PET Score </th>
  <th> Date Appeared</th>
  
 
 
  </tr >
 <?php
  $query="SELECT * FROM `competitive_exam` WHERE PET_date>'$p-01-01' AND PET_date<'$z-01-01'";
  $result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){?>
    <tr class="text-center">
    <td> <?php echo $row['Faculty_name'];?></td>
    <td> <?php echo $row['PET_score'];?></td>
    <td> <?php echo $row['PET_date']; ?> </td>
    
</tr>
    
<?php   
}
}
if($_POST['op4']=='GATE'){?>
  <tr class="bg-dark text-white text-center">
 
 
 <th> Username </th>
 <th>GATE Score </th>
 <th> Date Appeared</th>
 


 </tr >

<?php

$query="SELECT * FROM `competitive_exam` WHERE GATE_date>'$p-01-01' AND GATE_date<'$z-01-01'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr class="text-center">
    <td> <?php echo $row['Faculty_name'];?></td>
    <td> <?php echo $row['GATE_score'];?></td>
    <td> <?php echo $row['GATE_date']; ?> </td>
    
</tr>
<?php
}
}
}
}

else{?>
  <tr class="bg-dark text-white text-center">
 
 
  <th> Username </th>
  <th> Score </th>
  <th> Date Appeared</th>
  
 
 
  </tr >
 <?php
 }
 ?>
 <?php
$_SESSION['exam']=NULL;
?>

</table>



</body>
</html>