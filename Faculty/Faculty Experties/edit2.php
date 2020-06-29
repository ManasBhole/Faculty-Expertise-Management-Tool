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

    
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" /></p>
<p><input type="text" name="pname" placeholder="PET Appeared" 
required value="<?php echo $row['PET_appeared'];?>" /></p>
<p><input type="date" name="pdate" placeholder="PET Date" 
required value="<?php echo $row['PET_date'];?>" /></p>
<p><input type="text" name="pscore" placeholder="PET Score" 
required value="<?php echo $row['PET_score'];?>" /></p>
<p><input type="text" name="gname" placeholder="Gate appered" 
required value="<?php echo $row['GATE_appeared'];?>" /></p>
<p><input type="date" name="gdate" placeholder="GATE Date" 
required value="<?php echo $row['GATE_date'];?>" /></p>
<p><input type="text" name="gscore" placeholder="GATE Score" 
required value="<?php echo $row['GATE_score'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>



</form>
<?php } ?>
</div>
</div>
</body>
</html>
