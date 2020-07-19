<!DOCTYPE html>
<html>
<?php 
@session_start();
if (isset($_SESSION['Sdrn'])){
    echo '<script language="javascript"> alert("LOGIN OUT.."); </script>';
    session_unset();
    session_destroy();
}

?>
<?php
@session_start();
include('connect.php');

?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="otoplogin.css">
</head>

<body>
    <div id="form_wrapper">
    <form action="verifylogin1.php" method="POST">
        <div id="form_right" >
            <h1>Faculty Login</h1>
            
            <div class="input_container">
                <i class="fas fa-user"></i>
                <input placeholder="SDRN" type="number" name="Sdrn" id="field_SDRN" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="password" name="Password" id="field_password" class='input_field'>
            </div>
             <input type="submit" value="Login" id='input_submit' class='input_field'>
                <span>Forgot <a href="#"> Username / Password ?</a></span>
                <span id='create_account'>
                    <a href="logsignup.php">Create your account &#x27A1; </a>
                </span>
</form>
        </div>
    </div>
</body>

</html>