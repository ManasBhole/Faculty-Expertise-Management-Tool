<!DOCTYPE html>
<?php
@session_start();

?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div id="newform_wrapper">
    
        
        
    <h1>SIGN UP</h1>
            <form action="controller.php" method="POST">                 
            <div class="input_container">
                <input placeholder="SDRN" type="number" name="Sdrn" id="field_SDRN" class='input_field'>
            </div>
            <br>
            <div class="input_container">
                <input  placeholder="First name" type="text" name="First_name" id="First_name" class='input_field'>
            </div>
            <br>
            <div class="input_container">
                <input  placeholder="Middle name" type="text" name="Middle_name" id="Middle_name" class='input_field'>
            </div><br>
            <div class="input_container">
                <input  placeholder="Last name" type="text" name="Last_name" id="Last_name" class='input_field'>
            </div><br>
            <div class="input_container">
                <input  placeholder="DOB" type="date" name="DOB" id="field_password" class='example-date-input input_field'>
                
            </div><br>
            <div class="input_container">
                <input  placeholder="Department" type="text" name="Department" id="Department" class='input_field'>
            </div><br>
            <div class="input_container">
                    <input type="number" id="mobile" class="input_field" name="mobile"
					placeholder="Enter the 10 digit mobile">
            </div><br>
            <div class="input_container">
                <input  placeholder="Address" type="text" name="Address" id="Addr" class='input_field'>
            </div><br>
            <div class="input_container">
                <input  placeholder="Email" type="email" name="Email" id="Email" class='input_field'>
            </div><br>
            <div class="input_container">
            <input  placeholder="DOJ" type="date" name="Doj" id="field_password" class='example-date-input input_field'>
            </div><br>
            <div class="input_container">
                <input  placeholder="Qualifaction" type="text" name="Qualification" id="Qualifaction" class='input_field'>
            </div><br>
            <div class="input_container">
                <input  placeholder="Designation" type="text" name="Desig" id="Designation" class='input_field'>
            </div><br>
            <div class="input_container">
                <input  placeholder="Password" type="password" name="Password" id="Password" class='input_field'>
            </div><br>
        
            
            <button type="submit" class="input_field" name="Send_OTP" id='input_submit'>Send OTP</button>
                <div class="error"></div>
        </form>

    </div>
</div>
   
    
</body>


</html>