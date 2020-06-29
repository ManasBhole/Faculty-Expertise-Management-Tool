<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from faculty_as_resource where id='".$id."'"; 
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
$tname=$_REQUEST['tname'];
$ename=$_REQUEST['ename'];
$lname=$_REQUEST['lname'];
$vname=$_REQUEST['vname'];
$dname=$_REQUEST['dname'];

$submittedby = $_SESSION["username"];
$update="update faculty_as_resource set Faculty_name='".$name."', Resource_person='".$rname."' ,Topic_name='".$tname."'   ,Event_name='".$ename."' ,Level='".$lname."',Venue='".$vname."', Date='".$dname."' where id='".$id."'";
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
<p><name="rname" placeholder="Enter Resource_person" 
required value="<?php echo $row['Resource_person'];?>" />
<select  name="rname" >
<option>Expert speaker</option>
    <option>Judge</option>
    <option>Chairperson</option>
    <option>Reviewer (for paper orPh.D. related)</option>
    <option>Lectures in Industry</option></select>
</p>
<p><input type="text" name="tname" placeholder="Enter Topic Name" 
required value="<?php echo $row['Topic_name'];?>" /></p>

<p><input type="text" name="ename" placeholder="Enter Event Name" 
required value="<?php echo $row['Event_name'];?>" /></p>

<p><name="lname" placeholder="Enter Level" 
required value="<?php echo $row['Level'];?>" />
<select  name="lname" >
        <option>Local level</option>
    <option>State level</option>
    <option>National level</option>
    <option>International level</option>   
  </select>
  </p>
<p><input type="text" name="vname" placeholder="Enter Venue Name" 
required value="<?php echo $row['Venue'];?>" /></p>
<p><input type="date" name="dname" placeholder="Enter Date" 
required value="<?php echo $row['Date'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>



</form>
<?php } ?>
</div>
</div>
</body>
</html>
