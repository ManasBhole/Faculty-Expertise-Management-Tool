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
                SELECT * FROM `faculty_long_live` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
            $rows=mysqli_fetch_assoc($result);
        ?>>
        <div class="container">
  <h2>FACULTY LONG LIVE</h2>
              
  <table class="table table-hover">

    <tbody>
      <tr>
        <td>FACULTY NAME</td>
        <td></<?php echo($rows['Faculty_name'])?></td>
      </tr>
      <tr>
        <td>REASON OF LONG LIVE</td>
        <td><?php echo($rows['Reason_long_live'])?></td>
      </tr>
      <tr>
        <td>FROM DATE</td>
        <td><?php echo($rows['From_date'])?></td>
      </tr>
      <tr>
        <td>TO DATE</td>
        <td><?php echo($rows['To_date'])?></td>
      </tr>
      <tr>
        <td>DATE OF JOINING AFTER LONG LIVE</td>
        <td><?php echo($rows['Date_of_joining_after_long_live'])?></td>
      </tr>
      <tr>
        
    
    </tbody>
  </table>
</div>


</body>
</html>