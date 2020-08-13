
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
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Option2</title>
</head>
<body>
    


<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title" style=" font-family: 'Times New Roman', Times, serif; font-size: 50px; color: whitesmoke;">Competitive Exams</div>
<img src="images/rait_logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px id="optionalstuff">
</nav>

<form action="option11.php" method='POST' enctype="multipart/form-data">
  <div class="form-group">
    <label for="Name">Name:</label>
    <div class="col-5"><input type="name" value="<?php echo $_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];?>" class="form-control border border-secondary" name="nam" id="name" disabled></div>
   </div>
   <div class="form-group">
    <label for="PET">PET Appeared</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="pet" id="PET"></div>
   </div>
    <div class="col-5">
    <label for="Date of PET Exam" >Date of PET Exam</label>
     <div class="col-6">
    <input class="form-control border border-secondary" type="date" name="pet_date" id="PET-date-input">
    </div>
    </div>
    <div class="form-group">
    <label for="PET Score">PET score:</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" placeholder="Enter score" name="pet_score" id="PET_score"></div>
    </div>
    <div class="form-group">
    <label for="Gate Appeared">Gate Appeared:</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="gate_appeared" id="Gate Appeared"></div>
    </div>
    <div class="col-5">
    <label for="GATE-date-input" >Date of GATE</label>
     <div class="col-6">
    <input class="form-control border border-secondary" type="date" name="gate_date" id="GATE-date-input">
    </div>
    </div>
    <div class="form-group">
    <label for="GET_score">GATE score</label>
    <div class="col-5"><input type="number" class="form-control border border-secondary" name="gate_score" id="GATE_score"></div>
    </div>
    </div>

    <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-5">
      <input  type="file" class="custom-file-input" id="customFile" name="file">
      <label style="margin-left:30px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>
    
    <div class="btn">
    <button type="submit" name="submit2" class="btn btn-primary ">Submit</button>
    </div>
    
    
</form>



<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label border border-secondary").addClass("selected").html(fileName);
});
</script>


   
</body>
</html>