<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from qualification where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$aname=$_REQUEST['aname'];
$sname =$_REQUEST['sname'];
$yname=$_REQUEST['yname'];
$uname =$_REQUEST['uname'];
$rname=$_REQUEST['rname'];
$cname =$_REQUEST['cname'];
$stname=$_REQUEST['stname'];
$rsname=$_REQUEST['rsname'];
$gname =$_REQUEST['gname'];



$submittedby = $_SESSION["username"];
$update="update qualification set Faculty_name='".$name."', Admitted_for_program='".$aname."' ,Specialization='".$sname."'  ,Year_of_admission='".$yname."'  ,University='".$uname."' ,Registration_number='".$rname."'  ,College_name='".$cname."',Status='".$sname."'  ,Research_topic='".$rsname."'  ,Guide_name='".$gname."' where id='".$id."'";
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
    <div class="col-5"><input type="name" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>"  class="form-control border border-secondary" /></div>
    </div>
    <div class="form-group">
    <label for="Admitted for Programme">Admitted for Programme:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="aname" placeholder="Admitted for program" 
required value="<?php echo $row['Admitted_for_program'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Specialization/Department:">Specialization/Department:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="sname" placeholder="Specialization" 
required value="<?php echo $row['Specialization'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Year of Admission:">Year of Admission:</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="yname" placeholder="Year of admission" 
required value="<?php echo $row['Year_of_admission'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="University:">University:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="uname" placeholder="University" 
required value="<?php echo $row['University'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Registration Number:">Registration Number:</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="rname" placeholder="Registration number" 
required value="<?php echo $row['Registration_number'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Name of College:">Name of College:</label>
    <div class="col-5"><input type="text" class="form-control border border-secondary" name="cname" placeholder="College name" 
required value="<?php echo $row['College_name'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Status:">Status:</label>
    <div class="col-5"><input type="text" class="form-control border border-secondary" name="stname" placeholder="Status" 
required value="<?php echo $row['Status'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Topic Name:">Research Topic Name /Course Topic Name:</label>
    <div class="col-5"><input type="text" class="form-control border border-secondary"name="rsname" placeholder="Research topic" 
required value="<?php echo $row['Research_topic'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Guide Name:">Guide Name:</label>
    <div class="col-5"><input type="text" class="form-control border border-secondary" name="gname" placeholder="Guide name" 
required value="<?php echo $row['Guide_name'];?>" /></div>
    </div>

 
    
    <div class="btn">
    <button name="submit" type="submit" value="Update" class="btn btn-primary "/>Update</button>
    </div>
    
  
   
</form>
<?php } ?>



















</body>
</html>
