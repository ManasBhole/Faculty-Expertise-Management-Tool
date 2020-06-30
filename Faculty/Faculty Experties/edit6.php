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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Option5</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Faculty Promotion</div>
<img src="images/rait_logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
</nav>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <div class="form-group">
        <label for="Name">Name:</label>
        <div class="col-5"><input type="name"  class="form-control border border-secondary" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" /></div>
    </div>
    <div class="col-5">
      <label for="join-date-input" >Date of joining </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="dname" placeholder="Date_of_joining" 
required value="<?php echo $row['Date_of_joining'];?>" />
      </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-form-label" for="SDRN">SDRN Number:</label>
        <div class="col-2"><input type="name" class="form-control border border-secondary" name="sname" placeholder="SDNR_number" 
required value="<?php echo $row['SDNR_number'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="RAIT Experience">RAIT Experience</label>
    <div class="col-5"><input type="text" class="form-control border border-secondary" name="rname" placeholder="RAIT_experience" 
required value="<?php echo $row['RAIT_experience'];?>" /></div>
    </div>
    <div class="form-group">
    <label for="Other Teaching Experience">Other Teaching Experience</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="oname" placeholder="Other_experience" 
required value="<?php echo $row['Other_experience'];?>" /></div>
    </div>
    <div class="form-group">
    <label for ="Industry Experience">Industry Experience</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" name="iname" placeholder="Industry_experience" 
required value="<?php echo $row['Industry_experience'];?>" /></div>
    </div>  
    <div class="form-group">
    <label for="exampleFormControlTextarea1"> Total Experience</label>
    <div class="col-5"><input class="form-control border border-secondary" name="tname" placeholder="Total_experience" 
required value="<?php echo $row['Total_experience'];?>" /></div>
    </div>
    <div class="form-group">
        <label for="Designation">Designation of Faculty as on date of joining:</label>
        <div class="col-5"><input type="text" class="form-control border border-secondary" name="sd" placeholder="Starting_designation" 
required value="<?php echo $row['Starting_designation'];?>" ></div>
    </div>
    <div class="form-group">
        <label for="Promoted Designation first">1st Promoted Designation:</label>
        <div class="col-5"><input type="text" class="form-control border border-secondary" name="pf" placeholder="Promotion_1" 
required value="<?php echo $row['Promotion_1'];?>" /></div>
    </div>
    <div class="col-5">
      <label for="Promotionfirst" >Date of 1st Promotion </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="pdf" placeholder="Date_promotion_1" 
required value="<?php echo $row['Date_promotion_1'];?>" />
      </div>
    </div>
    <div class="form-group">
        <label for="Promoted Designation second">2nd Promoted Designation:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary" name="ps" placeholder="Promotion_2" 
required value="<?php echo $row['Promotion_2'];?>" /></div>
    </div>
    <div class="col-5">
      <label for="Promotionsecond" >Date of2nd Promotion </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="pds" placeholder="Date_promotion_2" 
required value="<?php echo $row['Date_promotion_2'];?>" />
      </div>
    </div>
 

  <div class="btn">
  <button name="submit" type="submit" value="Update" class="btn btn-primary "/>Update</button>
    </div>



</form> 
<?php } ?>



















</body>
</html>
