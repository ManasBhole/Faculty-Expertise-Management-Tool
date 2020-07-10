<?php
@session_start();
include('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from qualification where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$image=$row['pdf'];


function is_image($path)
{
	$a = getimagesize($path);
	$image_type = $a[2];
	
	if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
	{
		return true;
	}
	return false;
}

if($image=="")
{
   echo '<script language="javascript">';
	echo 'alert("No file uploaded");';
	echo 'window.location.href="individualreport.php";';
	echo '</script>';
}
else{
    

    if(is_image($image)){
        echo '<img src="'.$image.'" alt="random image">'."&nbsp;&nbsp;";
    }
    else{
        $file = $image;
        $filename = $image;
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($file));
        header('Accept-Ranges: bytes');
        @readfile($file);
    }
}
    
?>
