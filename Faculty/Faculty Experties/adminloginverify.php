<!--verify login 
 decide if the credentials entered are correct -->
 <?php
    @session_start();
    include 'connect.php';
    //setting variable using post array
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    //check if the user exists in the user table
    $query = "select * from admin_detail where Username = '$Username' ";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res) > 0){

        if(strcmp($row['Password'],$Password)==0){
        //if the user exists then create seesion variables emailid and password
        $_SESSION['Username']=$Username;
        $_SESSION['Password']=$Password;
      


        
        
        
        header('Location:adminpanel.php');
    }
    //incorrect password
    else{
        echo '<script language="javascript"> alert("Invalid password"); </script>';
        header('Location: adminlogin.php');
    }
}
    //if user is not found
    else {
        
        echo '<script language="javascript"> alert("User not found"); </script>';
        header('Location: adminlogin.php');
    }
?>