<!--verify login 
 decide if the credentials entered are correct -->
<?php
    @session_start();
    include 'connect.php';
    //setting variable using post array
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    //check if the user exists in the user table
    $query = "select * from login_info where userid = '$userid' ";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res) > 0){

        if(strcmp($row['password'],$password)==0){
        //if the user exists then create seesion variables emailid and password
        $_SESSION['userid']=$userid;
        $_SESSION['password']=$password;
        $_SESSION['username'] = $row['username'];
        $_SESSION['SDRN'] = $row['SDRN'];
        $_SESSION['Designation'] = $row['Designation'];
        
        header('Location:detail.php');
    }
    //incorrect password
    else{
        echo "<script> alert('Invalid Password!') </script>";
        header('Location: newlogin.php');
    }
}
    //if user is not found
    else {
        echo "<script> alert('User not found!') </script>";
        header('Location: newlogin.php');
    }
?>