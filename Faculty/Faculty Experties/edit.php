<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from awards where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$uname=$_REQUEST['uiname'];
$aname=$_REQUEST['aname'];
$cname=$_REQUEST['cname'];
$ename=$_REQUEST['ename'];
$pname=$_REQUEST['pname'];
$lname=$_REQUEST['lname'];

$submittedby = $_SESSION["username"];
$update="update awards set Faculty_name='".$name."', University='".$uname."' ,Award_name='".$aname."'  ,College_name='".$cname."'  ,Event_name='".$ename."' ,Position='".$pname."',Level='".$lname."'  where id='".$id."'";
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
    
    <title>Edit4 </title>
</head>    
<nav class="navbar navbar-expand-sm bg-dark ">
        <div class="navbar_title">Awards</div>
    <img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
    </nav>


<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <div class="form-group">
    <label for="Name">Name:</label>
    <div class="col-5"><input type="name" name="name" class="form-control border border-secondary"  placeholder="Enter Name"  
required value="<?php echo $row['Faculty_name'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Award">Name of Award:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="aname" placeholder="Enter Award Name" 
required value="<?php echo $row['Award_name'];?>" /></div>
    </div>
    <div class="form-group">
      <label for="position">Select Position:</label>
      <div class="col-5">
     <select class="form-control  border border-secondary" name="pname" placeholder="Enter Position" 
required value="<?php echo $row['Position'];?>" />
        <option>1st</option>
        <option>2nd</option>
        <option>3rd</option>
        <option>Participating</option>
     </select>
        </div>
    </div>
    <div class="form-group">
    <label for="Award">Name of the event:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="ename" placeholder="Enter Event Name" 
required value="<?php echo $row['Event_name'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Award">University:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="uiname" placeholder="Enter University" 
required value="<?php echo $row['University'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Award">Name of the college</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="cname" placeholder="Enter College Name" 
required value="<?php echo $row['College_name'];?>" /></div>
    </div>
    <div class="form-group">
  <label for="sel1">Select level:</label>
  <div class="col-4">
  <select class="form-control border border-secondary" name="lname" placeholder="Enter Level" 
required value="<?php echo $row['Level'];?>" />
    <option>Local level</option>
    <option>State level</option>
    <option>National level</option>
    <option>International level</option>   
  </select>
  </div>


    <div class="btn">
    <button name="submit" type="submit" value="Update" class="btn btn-primary "/>Update</button>
    </div>

</form>
<?php } ?>










</body>
</html>
