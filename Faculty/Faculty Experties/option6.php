<!DOCTYPE html>
<html lang="en">
<?php
@session_start();
if(isset($_SESSION['o1'])){
echo '<script language="javascript"> alert("DETAILS ALREADY EXISTS"); </script>';
$_SESSION['o1']=NULL;
}
?>
<?php

include('connect.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Option6</title>
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title" style=" font-family: 'Times New Roman', Times, serif; font-size: 50px; color: whitesmoke;">Faculty Long live</div>
<img src="images/rait_logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px id="optionalstuff">
</nav>

<form action="option11.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Name">Name:</label>
        <div class="col-5"><input type="text" value="<?php echo $_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];?>" class="form-control border border-secondary" name="name4" id="name" disabled></div>
    </div>
    <div class="form-group">
        <label for="Reason">Reason For Long Live:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter Reason" name="reason" id="Reason"></div>
    </div>
    <div class="col-5">
      <label for="From_Date" >From Date </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="from_date" id="From_Date">
      </div>
    </div>
    <div class="col-5">
      <label for="To_Date" >To Date </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="to_date" id="To_Date">
      </div>
    </div>
    <div class="col-5">
      <label for="Longlive" >Date of joining after Long Live </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" name="longlive" id="Longlive">
      </div>
    </div>
    <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-5">
      <input  type="file" class="custom-file-input" id="customFile" name="file">
      <label style="margin-left:33px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>

    <div class="btn">
        <button type="submit" name="submit6" class="btn btn-primary ">Submit</button>
    </div>


</form>
    
</body>

<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
 
</html>