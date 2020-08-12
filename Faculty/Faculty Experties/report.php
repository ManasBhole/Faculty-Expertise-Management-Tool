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
   <link rel="stylesheet" href="files/reportstyle.css">
    
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

        if($_SERVER['REQUEST_METHOD']=='POST')
            $_SESSION['Sdrn']=mysqli_real_escape_string($conn,$_POST['Sdrn']);
        $Sdrn=$_SESSION['Sdrn'];
    
        function fetch($result,$value){

            $counter=0;
            while ($rows=mysqli_fetch_assoc($result)){
             
                $counter=1;
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

                    $path=preg_replace('/\s/','%20',$path);
                    echo("<td><a href=$path target=$target><button class='btn'>Preview</button></a></td>"); 
                }
                elseif ($value=="name") 
                    echo("<td>".$rows["First_name"]." ".$rows["Middle_name"]." ".$rows["Last_name"]."</td>");
                else
                    echo("<td>".$rows[$value]."</td>");
            }
            
            if ($counter==0){ 

                if($value!="pdf")
                    echo("<td>N/A</td>");
                else 
                    echo("<td><a href='report.php?file_path='><button class='btn'>Preview</button></a></td>"); 
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
                    ob_clean();
                    flush();
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
            else
                echo("<script>alert('No File Uploaded');window.location.href='report.php';</script>");
        }
    ?>

    <nav class="navbar navbar-expand-sm">
        <div class="navbar_title" style=" font-family: 'Times New Roman', Times, serif; font-size: 50px; color: whitesmoke;">Report</div>
        <img src="images/rait_logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
    </nav>  

    <div class="conatiner" style="border: 2px solid #80808061; margin: 1rem; text-align: center;">
        <?php
            include 'files/faculty.php'; 
            include 'files/resource.php';
            include 'files/exams.php';
            include 'files/qualification.php';
            include 'files/awards.php';
            include 'files/promotion.php';
            include 'files/long_live.php';
        ?>
        <a href="files/excel.php"><button class="btn excel">Excel Export</button></a>
    </div>

    <?php $conn->close();?>

    <script>
        if (window.history.replaceState)  
            window.history.replaceState(null,null,window.location.href);
    </script>
</body>
</html>