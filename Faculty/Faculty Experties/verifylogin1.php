<!--verify login 
 decide if the credentials entered are correct -->
 <?php
    @session_start();
    include 'connect.php';
    //setting variable using post array
    $Sdrn = $_POST['Sdrn'];
    $Password = $_POST['Password'];

    //check if the user exists in the user table
    $query = "select * from faculty_info where Sdrn = '$Sdrn' ";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res) > 0){

        if(strcmp($row['Password'],$Password)==0){
        //if the user exists then create seesion variables emailid and password
        $_SESSION['Sdrn']=$Sdrn;
        $_SESSION['Password']=$Password;
        $_SESSION['Sdrn'] = $row['Sdrn'];
        $_SESSION['firstname']=$row['First_name'];
        $_SESSION['middlename']=$row['Middle_name'];
        $_SESSION['thirdname']=$row['Last_name'];


        
        
        
        header('Location:detail.php');
    }
    //incorrect password
    else{
        echo '<script language="javascript"> alert("Invalid password"); </script>';
        header('Location: login.php');
    }
}
    //if user is not found
    else {
        
        echo '<script language="javascript"> alert("User not found"); </script>';
        header('Location: login.php');
    }
?>