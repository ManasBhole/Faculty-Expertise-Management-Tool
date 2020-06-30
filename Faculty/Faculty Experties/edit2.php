<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from competitive_exam where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$pname=$_REQUEST['pname'];
$pdate=$_REQUEST['pdate'];
$pscore=$_REQUEST['pscore'];
$gname=$_REQUEST['gname'];
$gdate=$_REQUEST['gdate'];
$gscore=$_REQUEST['gscore'];

$submittedby = $_SESSION["username"];
$update="update competitive_exam set Faculty_name='".$name."', PET_appeared='".$pname."' ,PET_date='".$pdate."'  ,PET_score='".$pscore."'  ,GATE_appeared='".$gname."' ,GATE_date='".$gdate."'  ,GATE_score='".$gscore."'where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='individualreport.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';



}
else {
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title> Competitive Exams</title>
</head>    
<nav class="navbar navbar-expand-sm bg-dark ">
        <div class="navbar_title">Competitive Exams</div>
    <img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
    </nav>
    <form name="form" method="post" action="">
  <div class="form-group">
      <input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <label for="Name">Name:</label>
    <div class="col-5"><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" / class="form-control border border-secondary" ></div>
   </div>
   <div class="form-group">
    <label for="PET">PET Appeared</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="pname" placeholder="PET Appeared" 
required value="<?php echo $row['PET_appeared'];?>" /></div>
   </div>
    <div class="col-5">
    <label for="Date of PET Exam" >Date of PET Exam</label>
     <div class="col-6">
    <input class="form-control border border-secondary" type="date"  name="pdate" placeholder="PET Date" 
required value="<?php echo $row['PET_date'];?>" />
    </div>
    </div>
    <div class="form-group">
    <label for="PET Score">PET score:</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="pscore" placeholder="PET Score" 
required value="<?php echo $row['PET_score'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Gate Appeared">Gate Appeared:</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="gname" placeholder="Gate appered" 
required value="<?php echo $row['GATE_appeared'];?>" /></div>
    </div>
    <div class="col-5">
    <label for="GATE-date-input" >Date of GATE</label>
     <div class="col-6">
    <input class="form-control border border-secondary" type="date" name="gdate" placeholder="GATE Date" 
required value="<?php echo $row['GATE_date'];?>" />
    </div>
    </div>
    <div class="form-group">
    <label for="GET_score">GATE score</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="gscore" placeholder="GATE Score" 
required value="<?php echo $row['GATE_score'];?>" /></div>
    </div>
    </div>
    <div class="btn">
    <button name="submit" type="submit" value="Update" class="btn btn-primary "/>Update</button>
    </div>
    
    
</form>
<?php } ?>
    
















</div>
</div>
</body>
</html>
