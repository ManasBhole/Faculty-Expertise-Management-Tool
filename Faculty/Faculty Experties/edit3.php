<?php
@session_start();
include('connect.php');
define('KB', 1024);
define('MB', 1048576);



if(isset($_POST['sub4'])){
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
$update="update qualification set Faculty_name='".$name."', Admitted_for_program='".$aname."' ,Specialization='".$sname."'  ,Year_of_admission='".$yname."'  ,University='".$uname."' ,Registration_number='".$rname."'  ,College_name='".$cname."',Status='".$sname."'  ,Research_topic='".$rsname."'  ,Guide_name='".$gname."' ,pdf='".$fileDestination."'   where id='".$id."'";
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
    
<form action="edit3.php" method="POST" enctype="multipart/form-data">
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

 <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-5">
      <input  type="file" class="custom-file-input" id="customFile" name="file"  required value="<?php echo $row['pdf'];?>" >
      <label style="margin-left:33px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>

  <div class="btn">
  <button type="submit" name="sub4" class="btn btn-primary ">Submit</button>
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
