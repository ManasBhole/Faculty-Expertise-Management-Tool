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

    
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" /></p>
<p><input type="text" name="uiname" placeholder="Enter University" 
required value="<?php echo $row['University'];?>" /></p>
<p><input type="text" name="aname" placeholder="Enter Award Name" 
required value="<?php echo $row['Award_name'];?>" /></p>
<p><input type="text" name="cname" placeholder="Enter College Name" 
required value="<?php echo $row['College_name'];?>" /></p>
<p><input type="text" name="ename" placeholder="Enter Event Name" 
required value="<?php echo $row['Event_name'];?>" /></p>
<p><name="pname" placeholder="Enter Position" 
required value="<?php echo $row['Position'];?>" />
<select  name="pname" >
        <option>1st</option>
        <option>2nd</option>
        <option>3rd</option>
        <option>Participating</option>
     </select></p>
     
     <p><name="lname" placeholder="Enter Level" 
required value="<?php echo $row['Level'];?>" />
<select  name="lname" >
        <option>Local level</option>
    <option>State level</option>
    <option>National level</option>
    <option>International level</option>   
  </select>
  </p>
<p><input name="submit" type="submit" value="Update" /></p>



</form>
<?php } ?>
</div>
</div>
</body>
</html>
