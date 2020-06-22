<?php 
include "config1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="newloginstyl.css">
    <title>Document</title>

  <?php 
    //Login Part
    $error_message = "";$success_message = "";

  if(isset($_POST['but_submit'])){

  $uname = mysqli_real_escape_string($con,$_POST['txt_id']);
  $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

  if ($uname != "" && $password != ""){

      $sql_query = "select count(*) as cntUser from login_info where email='".$uname."' and password='".$password."'";
      $result = mysqli_query($con,$sql_query);
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
          $_SESSION['uname'] = $uname;
          header('Location:../detail1.php');
      }else{
          echo "Invalid username and password";
      }
    }

    }
// Register part
    if(isset($_POST['btnsignup'])){
   $fname = trim($_POST['fname']);
  
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   

   $isValid = true;

   // Check fields are empty or not
   if($fname == ''  || $email == '' || $password == '' ){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }



   // Check if Email-ID is valid or not
   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $isValid = false;
     $error_message = "Invalid Email-ID.";
   }

   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM login_info WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Email-ID is already existed.";
     }

   }

   // Insert records
   if($isValid){
     $insertSQL = "INSERT INTO login_info(fname,email,password ) values(?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("sss",$fname,$email,$password);
     $stmt->execute();
     $stmt->close();

     $success_message = "Account created successfully.";
   }
}
?>
</head>
<body>
    <div class="hero">
         <div class="form-box">
             <div class="button-box">
                 <div id="btn"></div>
                 <button type="button" class="toggle-btn" onclick="login()">Log-In</button>
                 <button type="button" class="toggle-btn" onclick="register()">Register</button>
             </div>
             <form id="login" method="post" action="detail.php" class="input-group">
                 <input type="text" class="input-field" placeholder="User-Id" name="txt_id"required>
                 <input type="text" class="input-field" placeholder="Enter password" name="txt_pwd"required>
                 <input type="checkbox" class="chech-box" ><span>Remember Password</span>
                 <button type="submit" class="submit-btn" name="but_submit" >Log In</button>

             </form>
             <form id="register" method="post" class="input-group" action="login.php">
                 <input type="text" class="input-field" placeholder="Username" name="fname" required>
                 <input type="email" class="input-field" placeholder="User-Id" name="email"required>
                 <input type="text" class="input-field" placeholder="Enter password" name="password" required>
                 
                 <button type="submit" name="btnsignup" class="submit-btn" >Register</button>

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