<?php
@session_start();
include('connect.php');
define('KB', 1024);
define('MB', 1048576);



if(isset($_POST['sub5'])){
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
             $fileDestination="upload_files/resource_person/".$fileNameNew;
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
$update="update faculty_as_resource set Faculty_name='".$name."', Resource_person='".$rname."' ,Topic_name='".$tname."'   ,Event_name='".$ename."' ,Level='".$lname."',Venue='".$vname."', Date='".$dname."',pdf='".$fileDestination."'    where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
echo '<script language="javascript">';
echo 'alert("Report Updated");';
echo 'window.location.href="individualreport.php";';
echo '</script>';



}
else {
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <title>OPTION1</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Faculty as Resource Person</div>
<img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
</nav>

<form action="edit4.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <div class="form-group">
    <label for="Name">Name:</label>
    <div class="col-5"><input type="name" name="name" placeholder="Enter Name" 
required value="<?php echo $row['Faculty_name'];?>" /  class="form-control border border-secondary" > </div>
    </div>
  <div class="form-group">
  <label for="sel1">Select list:</label>
  <div class="col-4">
  <select class="form-control border border-secondary" name="rname" placeholder="Enter Resource_person" 
required value="<?php echo $row['Resource_person'];?>" />
    <option>Expert speaker</option>
    <option>Judge</option>
    <option>Chairperson</option>
    <option>Reviewer (for paper orPh.D. related)</option>
    <option>Lectures in Industry</option>
  </select>
  </div>
</div>
  <div class="form-group">
    <label for="topic">Topic:</label>
    <div class="col-4">
    <input type="topic" class="form-control border border-secondary" name="tname" placeholder="Enter Topic Name" 
required value="<?php echo $row['Topic_name'];?>" />
</div>
    </div>
  <div class="form-group">
    <label for="Event name">Event/Course Name:</label>
    <div class="col-4">
    <input type="name" class="form-control border border-secondary" name="ename" placeholder="Enter Event Name" 
required value="<?php echo $row['Event_name'];?>" />
    </div>
  </div>
  <div class="form-group">
  <label for="sel1">Select level:</label>
  <div class="col-4">
  <select class="form-control border border-secondary"name="lname" placeholder="Enter Level" 
required value="<?php echo $row['Level'];?>" />
    <option>Local level</option>
    <option>State level</option>
    <option>National level</option>
    <option>International level</option>
    
  </select>
  </div>
  
    </div>
    <div class="form-group">
    <label for="Event name">Venue</label>
    <div class="col-5"><input type="text" class="form-control border border-secondary" name="vname" placeholder="Enter Venue Name" 
required value="<?php echo $row['Venue'];?>" /></div>
    </div>
    <div class="col-5">
      <label for="example-date-input" >Date</label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="dname" placeholder="Enter Date" 
required value="<?php echo $row['Date'];?>" />
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
  <button type="submit" name="sub5" class="btn btn-primary ">Submit</button>
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
