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
                SELECT * FROM `faculty_promotion` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
            $rows=mysqli_fetch_assoc($result);
        ?>
        <div class="container">
  <h2>FACULTY PROMOTION</h2>
              
  <table class="table table-hover">

    <tbody>
      <tr>
        <td>FACULTY NAME</td>
        <td></<?php echo($rows['Faculty_name'])?></td>
      </tr>
      <tr>
        <td>DATE OF JOINING</td>
        <td><?php echo($rows['Date_of_joining'])?></td>
      </tr>
      <tr>
        <td>SDRN NUMBER</td>
        <td><?php echo($rows['SDNR_number'])?></td>
      </tr>
      <tr>
        <td>RAIT EXPERIENCE</td>
        <td><?php echo($rows['RAIT_experience'])?></td>
      </tr>
      <tr>
        <td>OTHER EXPERIENCE</td>
        <td><?php echo($rows['Other_experience'])?></td>
      </tr>
      <tr>
        <td>INDUSTRY EXPERIENCE</td>
        <td><?php echo($rows['Industry_experience'])?></td>
      </tr>
      <tr>
        <td>TOTAL EXPERIENCE</td>
        <td><?php echo($rows['Total_experience'])?></td>
      </tr>
      <tr>
        <td>STARTING DESIGNATION</td>
        <td><?php echo($rows['Starting_designation'])?></td>
      </tr>
      <tr>
        <td>PROMOTION 1</td>
        <td><?php echo($rows['Promotion_1'])?></td>
      </tr>
      <tr>
        <td>DATE PROMOTION 1</td>
        <td><?php echo($rows['Date_promotion_1'])?></td>
      </tr>
      <tr>
        <td>PROMOTION 2</td>
        <td><?php echo($rows['Promotion_2'])?></td>
      </tr>
      <tr>
        <td>DATE PROMOTION 2</td>
        <td><?php echo($rows['Date_promotion_2'])?></td>
      </tr>
    
    </tbody>
  </table>
</div>


</body>
</html>