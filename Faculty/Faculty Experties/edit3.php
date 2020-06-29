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

    
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" /></p>
<p><input type="text" name="aname" placeholder="Admitted for program" 
required value="<?php echo $row['Admitted_for_program'];?>" /></p>
<p><input type="text" name="sname" placeholder="Specialization" 
required value="<?php echo $row['Specialization'];?>" /></p>
<p><input type="text" name="yname" placeholder="Year of admission" 
required value="<?php echo $row['Year_of_admission'];?>" /></p>
<p><input type="text" name="uname" placeholder="University" 
required value="<?php echo $row['University'];?>" /></p>
<p><input type="text" name="rname" placeholder="Registration number" 
required value="<?php echo $row['Registration_number'];?>" /></p>
<p><input type="text" name="cname" placeholder="College name" 
required value="<?php echo $row['College_name'];?>" /></p>
<p><input type="text" name="stname" placeholder="Status" 
required value="<?php echo $row['Status'];?>" /></p>

<p><input type="text" name="rsname" placeholder="Research topic" 
required value="<?php echo $row['Research_topic'];?>" /></p>
<p><input type="text" name="gname" placeholder="Guide name" 
required value="<?php echo $row['Guide_name'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>



</form>
<?php } ?>
</div>
</div>
</body>
</html>
