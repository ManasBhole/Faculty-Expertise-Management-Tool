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

    
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" /></p>
<p><input type="text" name="rname" placeholder="Enter Reason for live" 
required value="<?php echo $row['Reason_long_live'];?>" /></p>
<p><input type="date" name="fname" placeholder="From_date" 
required value="<?php echo $row['From_date'];?>" /></p>
<p><input type="date" name="tname" placeholder="To_date" 
required value="<?php echo $row['To_date'];?>" /></p>
<p><input type="date" name="dname" placeholder="Date_of_joining_after_long_live" 
required value="<?php echo $row['Date_of_joining_after_long_live'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>



</form>
<?php } ?>
</div>
</div>
</body>
</html>
