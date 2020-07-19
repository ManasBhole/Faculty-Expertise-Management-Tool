<!DOCTYPE html>
<?php
@session_start();
include('connect.php');

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
body{
	padding: 0;
	margin: 0;
	background-image: url(images/university_image.jpg);
    background-attachment: fixed;
    background-size:100% 100%;
    background-repeat: no-repeat;  
    margin: 0;
    padding:0;
    display: flex;
    justify-content: center;
    align-items:center ;
	font-family: sans-serif;
	box-sizing: border-box;
}
#form_wrapper {
    width: 400px;
    height:400px;
    /* this will help us center it*/
    margin:170px auto auto auto;
    
    border-radius: 20px;
    /* make it a grid container*/
    display: grid;
    /* with two columns of same width*/
    
    /* with a small gap in between them*/
    grid-gap: 5vw;
    /* add some padding around */
    padding: 5px ;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    
}
label{
	font-size:15px;
	margin: auto auto auto 80px;
	color: #03bafc;	
	font-weight: bold;
}
#verify{
	height: 50px;
    /* make the borders more round */
    border-radius: 30px;
	width: 60%;
	margin-left: 80px;
}
#verify {
    /* submit button has a different color and different padding */
    background-color: #038cfc;
    padding-left: 0;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
}

#verify:hover {
    background-color: #03bafc;
    /* simple color transition on hover */
    transition: background-color,
        1s;
    cursor: pointer;
}
#mobileOtp{
	border-radius: 4px;
	padding: 5px;
	border-color: #03bafc;
	margin: auto auto auto 27%;
}
.error{
	font-size:15px;
	
	color: #03bafc;	
	font-weight: bold;
	margin-left:40px;
	margin-right: auto;
	
}
.success{
	font-size:15px;
	margin-left:40px;
	margin-right: auto;
	color: #03bafc;	
	font-weight: bold;
}


</style>
<body>

<form id="frm-mobile-verification" method="POST">

<div id=form_wrapper>
	<div class="form-row">
		<label>OTP is sent to Your Mobile Number</label>		
	</div>

	<div class="form-row">
		<input type="number" name="number" id="mobileOtp" class="form-input" placeholder="Enter the OTP">		
	</div>

	<div class="row">
		<input id="verify" name="submit" type="submit" class="btnVerify" >		
	</div>
	
</div>
</form>
<?php
if(isset($_POST['submit'])){

if($_POST['number']==$_SESSION['otp']){
   
    
    
    $Sdrn = $_SESSION['Sdrn']; 
    $First_name=$_SESSION['First_name'];
    $Middle_name=$_SESSION['Middle_name'];
    $Last_name= $_SESSION['Last_name'];
    $DOB=$_SESSION['DOB'];
    $Department=$_SESSION['Department'];
    $Contact_no=$_SESSION['Contact_no'];
    $Addr=$_SESSION['Addr'];
    $Email=$_SESSION['Email'];
    $Doj=$_SESSION['Doj'];
    $Qualification=$_SESSION['Qualification'];
    $Desig=$_SESSION['Desig'];
    $Password=$_SESSION['Password'];
    
    
    
    $user_check_query="SELECT * FROM faculty_info where Sdrn='$Sdrn' ";
    $user_check_res=mysqli_query($conn,$user_check_query);
    if(mysqli_num_rows($user_check_res)>0)
    {
        
    ?>
    <script type="text/javascript">
        alert('User already exists with the given SDRN \n Please Try Again');
        location.replace('login.php');
    </script>
    <?php  
    }


    else{
    $query1="INSERT INTO `faculty_info`(`Sdrn`, `First_name`,`Middle_name`,`Last_name`,`DOB`,`Department`,`Contact_no`,`Addr`,`Email`,`Doj`,`Qualification`,`Desig`,`Password`) 
    VALUES ('$Sdrn','$First_name','$Middle_name','$Last_name','$DOB','$Department','$Contact_no','$Addr','$Email','$Doj','$Qualification','$Desig','$Password');";

    
    $rs=mysqli_query($conn,$query1)or die("Could Not Perform the Query");
    

	unset($_SESSION['Sdrn']);
	unset($_SESSION['First_name']);
	unset($_SESSION['Middle_name']);
	unset($_SESSION['Last_name']);
	unset($_SESSION['DOB']);
	unset($_SESSION['Department']);
	unset($_SESSION['Contact_no']);
	unset($_SESSION['Addr']);
	unset($_SESSION['Email']);
	unset($_SESSION['Doj']);
	unset($_SESSION['Qualification']);
	unset($_SESSION['Doj']);
	unset($_SESSION['Doj']);







        header('Location:login.php');
    }

}
else{
    echo("wrong otp");
}

}
?>
</body>
</html>


