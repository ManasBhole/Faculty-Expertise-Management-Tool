<?php @session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <script src="https://kit.fontawesome.com/16e94d9d43.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <?php
        
        $severname="localhost";
        $username="root";
        $password="";
        $dbname="faculty";

        $conn=mysqli_connect($severname,$username,$password);
        
        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }
        mysqli_select_db($conn, $dbname);

        // $name=mysqli_real_escape_string($conn,$_GET['id']);

        if($_SERVER['REQUEST_METHOD']=='POST')
            $_SESSION['name']=mysqli_real_escape_string($conn,$_POST['id']);
        $name=$_SESSION['name'];
       
        function fetch($result,$value){

            while ($rows=mysqli_fetch_assoc($result)){
                
                if($rows==NULL)
                    break;

                if($value=="pdf"){

                    $file_ext = pathinfo($rows[$value], PATHINFO_EXTENSION);
                    $img=array('gif','png','jpeg','bmp','jpg');

                    if (in_array($file_ext,$img,TRUE)){
                        $path=$rows[$value];
                        $target="_blank";
                    }
                    else{
                        $path="report.php?file_path=".$rows[$value]; 
                        ($file_ext=='pdf')?$target='_blank':$target='_self';
                    }

                    $file_name=basename($rows[$value]);
                    $temp=explode('-',$file_name);
                    $file_name=end($temp);
                    echo("<td><a href=$path target=$target><button class='btn'>Preview</button></a></td>"); 
                }
                else
                    echo("<td>".$rows[$value]."</td>");
            }
            mysqli_data_seek($result,0);
        }

        if (isset($_GET['file_path'])) {
            $file_path = $_GET['file_path'];
            $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);

            if (file_exists($file_path)) {
                
                if ($file_ext=='pdf') {
                    header('Content-type: application/pdf'); 
                    header('Content-Disposition: inline; filename="' .$file_path. '"'); 
                    header('Content-Transfer-Encoding: binary'); 
                    header('Accept-Ranges: bytes');  
                    @readfile($file_path);  
                }

                else{
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename='.basename($file_path));
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: '.filesize($file_path));
                    ob_clean();
                    flush();
                    readfile($file_path);
                }
            }
        }
    ?>

    <div class="conatiner" style="border: 2px solid #80808061; margin: 1rem">
        <?php 
            include 'files/resource.php';
            include 'files/exams.php';
            include 'files/qualification.php';
            include 'files/awards.php';
            include 'files/promotion.php';
            include 'files/long_live.php';
        ?>
    </div>

    <?php $conn->close();?>

</body>
</html>