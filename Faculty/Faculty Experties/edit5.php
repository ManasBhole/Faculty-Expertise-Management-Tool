<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from faculty_long_live where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$rname=$_REQUEST['rname'];
$fname=$_REQUEST['fname'];
$tname=$_REQUEST['tname'];
$dname=$_REQUEST['dname'];


$submittedby = $_SESSION["username"];
$update="update faculty_long_live set Faculty_name='".$name."', Reason_long_live='".$rname."',From_date='".$fname."', To_date='".$tname."',Date_of_joining_after_long_live='".$dname."'  where id='".$id."'";
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
    <title>Faculty Long live</title>
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Faculty Long live</div>
<img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
</nav>
    
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <div class="form-group">
        <label for="Name">Name:</label>
        <div class="col-5"><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>"  class="form-control border border-secondary" /></div>
    </div>
    <div class="form-group">
        <label for="Reason">Reason For Long Live:</label>
        <div class="col-5"><input type="text" class="form-control border border-secondary" name="rname" placeholder="Enter Reason for live" 
required value="<?php echo $row['Reason_long_live'];?>" /></div>
    </div>
    <div class="col-5">
      <label for="From_Date" >From Date </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="fname" placeholder="From_date" 
required value="<?php echo $row['From_date'];?>" />
      </div>
    </div>
    <div class="col-5">
      <label for="To_Date" >To Date </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="tname" placeholder="To_date" 
required value="<?php echo $row['To_date'];?>" />
      </div>
    </div>
    <div class="col-5">
      <label for="Longlive" >Date of joining after Long Live </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="dname" placeholder="Date_of_joining_after_long_live" 
required value="<?php echo $row['Date_of_joining_after_long_live'];?>" />
      </div>
    </div>
    <div class="btn">
    <button name="submit" type="submit" value="Update" class="btn btn-primary "/>Update</button>
    </div>


</form>

<?php } ?>























</body>
</html>
