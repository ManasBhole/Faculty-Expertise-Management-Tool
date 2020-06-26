<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="reportstyle.css">
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

        $name=mysqli_real_escape_string($conn,$_GET['id']);

        function fetch($result,$value){

            // echo("<td>");
            while ($rows=mysqli_fetch_assoc($result)){

                    if($rows==NULL){
                        echo("<td>N/A</td>");
                        // echo("N/A");
                        break;
                    }
                    echo("<td>".$rows[$value]."</td>");
                    // echo($rows[$value]."<br>");
            }
            mysqli_data_seek($result,0);
            // echo("</td>");
        }
    ?>

    <div class="conatiner" style="border: 3px solid black;">
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