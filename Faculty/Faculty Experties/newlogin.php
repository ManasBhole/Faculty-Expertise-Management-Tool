
<!DOCTYPE html>
<html lang="en">
<?php 
@session_start();
if (isset($_SESSION['username'])){
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="newloginstyl.css">
    <title>Document</title>

    




</head>
<body>
    <div class="hero">
         <div class="form-box">
             <div class="button-box">
                 <div id="btn"></div>
                 <button type="button" class="toggle-btn" onclick="login()">Log-In</button>
                 <button type="button" class="toggle-btn" onclick="register()">Register</button>
             </div>
             <form id="login" class="input-group" action="verifylogin.php" method="POST">
                 <input type="text" class="input-field" placeholder="User-Id" required name="userid" >
                 <input type="password" class="input-field" placeholder="Enter password" required name="password">
                 <input type="checkbox" class="chech-box" ><span>Remember Password</span>
                 <button type="submit" class="submit-btn" >Log In</button>

             </form>
             <form id="register" class="input-group" action="signup.php" method="POST"> 
                 <input type="text" class="input-field" placeholder="Username" required name="username">
                 <input type="email" class="input-field" placeholder="User-Id" required name="userid">
                 <input type="number" class="input-field" placeholder="SDRN" required name="SDRN">
                 <input type="text" class="input-field" placeholder="Designation" required name="Designation">

                 <input type="password" class="input-field" placeholder="Enter password" required name="password">
                 
                 <button type="submit" class="submit-btn" >Register</button>

             </form>

         </div>
         
    </div>

    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>
</body>
</html>