<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Resources</title>
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `qualification` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
            $rows=mysqli_fetch_assoc($result);
        ?>
        <div class="container">
  <h2>QUALIFICATION</h2>
              
  <table class="table table-hover">

    <tbody>
      <tr>
        <td>FACULTY NAME</td>
        <td></<?php echo($rows['Faculty_name'])?></td>
      </tr>
      <tr>
        <td>ADMITTED FOR PROGRAM</td>
        <td><?php echo($rows['Admitted_for_program'])?></td>
      </tr>
      <tr>
        <td>SPECIALIZATION</td>
        <td><?php echo($rows['Specialization'])?></td>
      </tr>
      <tr>
        <td>YEAR OF ADMISSION</td>
        <td><?php echo($rows['Year_of_admission'])?></td>
      </tr>
      <tr>
        <td>UNIVERSITY</td>
        <td><?php echo($rows['University'])?></td>
      </tr>
      <tr>
        <td>REGISTRATION NUMBER</td>
        <td><?php echo($rows['Registration_number'])?></td>
      </tr>
      <tr>
        <td>COLLEGE NAME</td>
        <td><?php echo($rows['College_name'])?></td>
      </tr>
      <tr>
        <td>STATUS</td>
        <td><?php echo($rows['Status'])?></td>
      </tr>
      <tr>
        <td>RESEARCH TOPIC</td>
        <td><?php echo($rows['Research_topic'])?></td>
      </tr>
      <tr>
        <td>GUIDE NAME</td>
        <td><?php echo($rows['Guide_name'])?></td>
      </tr>
    
    </tbody>
  </table>
</div>


</body>
</html>