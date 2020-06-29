<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from faculty_promotion where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$dname=$_REQUEST['dname'];
$sname =$_REQUEST['sname'];
$rname=$_REQUEST['rname'];
$iname=$_REQUEST['iname'];
$oname=$_REQUEST['oname'];
$tname=$_REQUEST['tname'];
$sd=$_REQUEST['sd'];
$pf=$_REQUEST['pf'];
$pdf=$_REQUEST['pdf'];
$ps=$_REQUEST['ps'];
$pds=$_REQUEST['pds'];




$submittedby = $_SESSION["username"];
$update="update faculty_promotion set Faculty_name='".$name."', Date_of_joining='".$dname."',SDNR_number='".$sname."', RAIT_experience='".$rname."',Other_experience='".$oname."' , Industry_experience='".$iname."',Total_experience='".$tname."'  
,Starting_designation='".$sd."',Promotion_1='".$pf."',Date_promotion_1='".$pdf."',Promotion_2='".$ps."',Date_promotion_2='".$pds."'  where id='".$id."'";
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

<p><input type="date" name="dname" placeholder="Date_of_joining" 
required value="<?php echo $row['Date_of_joining'];?>" /></p>
<p><input type="text" name="sname" placeholder="SDNR_number" 
required value="<?php echo $row['SDNR_number'];?>" /></p>
<p><input type="text" name="rname" placeholder="RAIT_experience" 
required value="<?php echo $row['RAIT_experience'];?>" /></p>
<p><input type="text" name="oname" placeholder="Other_experience" 
required value="<?php echo $row['Other_experience'];?>" /></p>
<p><input type="text" name="iname" placeholder="Industry_experience" 
required value="<?php echo $row['Industry_experience'];?>" /></p>
<p><input type="text" name="tname" placeholder="Total_experience" 
required value="<?php echo $row['Total_experience'];?>" /></p>
<p><input type="text" name="sd" placeholder="Starting_designation" 
required value="<?php echo $row['Starting_designation'];?>" /></p>
<p><input type="text" name="pf" placeholder="Promotion_1" 
required value="<?php echo $row['Promotion_1'];?>" /></p>
<p><input type="date" name="pdf" placeholder="Date_promotion_1" 
required value="<?php echo $row['Date_promotion_1'];?>" /></p>
<p><input type="text" name="ps" placeholder="Promotion_2" 
required value="<?php echo $row['Promotion_2'];?>" /></p>
<p><input type="date" name="pds" placeholder="Date_promotion_2" 
required value="<?php echo $row['Date_promotion_2'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>



</form>
<?php } ?>
</div>
</div>
</body>
</html>
