<!doctype html>

<html lang="en">
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
    body{
    margin: 0;
    padding: 0;
    height: 100%;
  }
    select {
        position:absolute;
        right:15px;
        width:200px;
        height:32px;
        top : 45px;
    }
    input{
      
      position:absolute;
      top:45px;
      height:32px;
      right:916px;
    }
    button{
      font-family: 'Arial'; 
      font-size: 50px;
      position:absolute;
      top:45px;
      right :840px;
      height:32px;
      
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

    
    
</style>
</head>
<body>

<?php

if(isset($_POST['exam1'])){
  if($_POST['exam1']=='PET'){
  ?>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">PET Report</div>
<img src="../img/rait logo.jpeg"  id=logo alt="#" >
</nav>


<?php
}
if($_POST['exam1']=='GATE'){?>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">GATE Report</div>
<img src="../img/rait logo.jpeg"  id=logo alt="#" >
</nav>

<?php
}
}
else{
  ?>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Report</div>
<img src="../img/rait logo.jpeg"  id=logo alt="#" >
</nav>
<?php
}
?>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 
 <br>

 <form action='test.php' method="POST">
                   
<input class="bg-dark text-white" class="form-control" type="text" name='year' placeholder="Enter Year" id="example1" autocomplete="off" required>
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
        
  <select class="bg-dark text-white" name="exam1" required>
  <option value="none" selected disabled hidden>SELECT AN OPTION</option>
  <option value="PET">PET</option>
  <option value="GATE">GATE</option>
</select>
<div class="btn">
    <button type="submit" name="submit" class="btn btn-dark">Search</button>
      </div>
  </form> 
 

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 

<?php
@session_start();
include('connect.php');
if(isset($_POST['year']) && isset($_POST['exam1'])){
$_SESSION['exam']=$_POST['exam1'];
$p=$_POST['year'];
$z=$p+1;
if($_SESSION['exam']=='PET'){?>
  
  <tr class="bg-dark text-white text-center">
 
 
  <th> Username </th>
  <th>PET Score </th>
  <th> Date Appeared</th>
  
 
 
  </tr >
 <?php
  $query="SELECT * FROM `competitive_exam` WHERE PET_date>'$p-01-01' AND PET_date<'$z-01-01'";
  $result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr class="text-center">
    <td> <?php echo $row['Faculty_name'];?></td>
    <td> <?php echo $row['PET_score'];?></td>
    <td> <?php echo $row['PET_date']; ?> </td>
    
</tr>
    
<?php   
}
}
if($_SESSION['exam']=='GATE'){?>
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

?>
<?php
}
else{
  ?>
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