<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Option6</title>
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Faculty Promotion</div>
<img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
</nav>

<form action="/action_page.php">
    <div class="form-group">
        <label for="Name">Name:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter name" id="name"></div>
    </div>
    <div class="form-group">
        <label for="Reason">Reason For Long Live:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter Reason" id="Reason"></div>
    </div>
    <div class="col-5">
      <label for="From_Date" >From Date </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" value="2011-08-19" id="From_Date">
      </div>
    </div>
    <div class="col-5">
      <label for="To_Date" >To Date </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" value="2011-08-19" id="To_Date">
      </div>
    </div>
    <div class="col-5">
      <label for="Longlive" >Date of joining after Long Live </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" value="2011-08-19" id="Longlive">
      </div>
    </div>
    <div class="btn">
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div


</from>
    
</body>

<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</html>