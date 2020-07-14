<?php
@session_start();
include('connect.php');
define('KB', 1024);
define('MB', 1048576);



if(isset($_POST['sub7'])){
$file=$_FILES['file'];

$fileName=$_FILES['file']['name'];

$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];

$fileExt=explode(".", $fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf');
if(in_array($fileActualExt, $allowed))
{
    if($fileError==0){
        if($fileSize<4*MB){

           $fileNameNew=uniqid("",true).".".$fileActualExt;
            $fileDestination="upload_files/qualification/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            
            
        }
        else{
            echo "<script language='javascript'>alert('The Size of the file you are trying to upload exceeded the the size limit.\nTry Again.')</script>";
            header("Location:individualreport.php");
        }

    }
    else{
        echo "<script language='javascript'>alert('There was an error uploading your file.\nTry Again')</script>";
    header("Location:individualreport.php");
    }
}
else
{
    echo "<script language='javascript'>alert('You cannot upload files of this type!')</script>";
    header("Location:individualreport.php");
}

}

?>
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
,Starting_designation='".$sd."',Promotion_1='".$pf."',Date_promotion_1='".$pdf."',Promotion_2='".$ps."',Date_promotion_2='".$pds."'  
,pdf='".$fileDestination."'   where id='".$id."'";
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

<form action="edit6.php" method="POST" enctype="multipart/form-data">
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
 

 <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-5">
      <input  type="file" class="custom-file-input" id="customFile" name="file"  required value="<?php echo $row['pdf'];?>" >
      <label style="margin-left:33px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>

  <div class="btn">
  <button type="submit" name="sub7" class="btn btn-primary ">Submit</button>
    </div>

</form>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
  
<?php } ?>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    


</body>
</html>
