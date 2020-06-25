<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Awardreport</title>
</head>
<body>
    <?php
            $sql="
                SELECT * FROM `awards` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
            $rows=mysqli_fetch_assoc($result);
        ?>
        <div class="container">
  <h2>Awards</h2>
              
  <table class="table table-hover">

    <tbody>
      <tr>
        <td>FACULTY NAME</td>
        <td></<?php echo($rows['Faculty_name'])?></td>
      </tr>
      <tr>
        <td>AWARD NAME</td>
        <td><?php echo($rows['Award_name'])?></td>
      </tr>
      <tr>
        <td>POSITION</td>
        <td><?php echo($rows['Position'])?></td>
      </tr>
      <tr>
        <td>EVENT NAME</td>
        <td><?php echo($rows['Event_name'])?></td>
      </tr>
      <tr>
        <td>UNIVERSITY</td>
        <td><?php echo($rows['University'])?></td>
      </tr>
      <tr>
        <td>COLLEGE NAME</td>
        <td><?php echo($rows['College_name'])?></td>
      </tr>
      <tr>
        <td>LEVEL</td>
        <td><?php echo($rows['Level'])?></td>
      </tr>
    
    </tbody>
  </table>
</div>


</body>
</html>