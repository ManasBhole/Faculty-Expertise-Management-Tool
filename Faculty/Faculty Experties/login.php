

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<?php 
 $host="localhost";
 $user="root";
 $password="";
 $db="login";
 $con= mysqli_connect($host,$user,$password,$db);
 mysqli_select_db($con,$db);
 if(isset($_POST['submit']))
 {
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $ch="SELECT * FROM login_data";
    if($result=mysqli_query($con,$ch))
    {
        while($obj=mysql_fetch_object($result))
        {
            $fu=$obj->username;
            $fp=$obj->password;
            if($fu==$username && $fp==$password)
            {
                header('location:homepage.php');

            }
            else{
                echo"TRY AGAIN";

            }

        }
    }
 }

?>


<div class="login-box">
  <h2>Login</h2>
  <form method="POST" action="#">
    <div class="user-box">
      <input type="text" name="username"  required >
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password"  required>
      <label>Password</label>
    </div>
    <button type="button" class="buttonsty" name="submit"a href="detail.php" >
        submit
    </button>
  </form>
</div>

</body>
</html>