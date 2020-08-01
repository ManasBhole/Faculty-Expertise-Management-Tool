<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="otoplogin.css">
</head>
<body>
    <div id="form_wrapper">
    <form action="adminloginverify.php" method="POST">
        <div id="form_right" >
            <h1>Admin Login</h1>
            
            <div class="input_container">
                <i class="fas fa-user"></i>
                <input placeholder="Username" type="text" name="Username" id="field_Username" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="password" name="Password" id="field_password" class='input_field'>
            </div>
             <button type="submit" name="Login" id='input_submit' class='input_field'>LOGIN</button>
             <span><a href="login.php">Faculty Login</a></span>
</form>
        </div>
    </div>
</body>
</html>