<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="files/reportstyle.css">
    <title>Awardreport</title>
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `faculty_promotion` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>FACULTY PROMOTION</h2>
              
  <table class="table table-hover  table-sm">

    <tbody>
      <tr>
        <td class="table-active">FACULTY NAME</td>
        <?php fetch($result,'Faculty_name')?>
      </tr>
      <tr>
        <td class="table-active">DATE OF JOINING</td>
        <?php fetch($result,'Date_of_joining')?>
      </tr>
      <tr>
        <td class="table-active">SDRN NUMBER</td>
        <?php fetch($result,'SDNR_number')?>
      </tr>
      <tr>
        <td class="table-active">RAIT EXPERIENCE</td>
        <?php fetch($result,'RAIT_experience')?>
      </tr>
      <tr>
        <td class="table-active">OTHER EXPERIENCE</td>
        <?php fetch($result,'Other_experience')?>
      </tr>
      <tr>
        <td class="table-active">INDUSTRY EXPERIENCE</td>
        <?php fetch($result,'Industry_experience')?>
      </tr>
      <tr>
        <td class="table-active">TOTAL EXPERIENCE</td>
        <?php fetch($result,'Total_experience')?>
      </tr>
      <tr>
        <td class="table-active">STARTING DESIGNATION</td>
        <?php fetch($result,'Starting_designation')?>
      </tr>
      <tr>
        <td class="table-active">PROMOTION 1</td>
        <?php fetch($result,'Promotion_1')?>
      </tr>
      <tr>
        <td class="table-active">DATE PROMOTION 1</td>
        <?php fetch($result,'Date_promotion_1')?>
      </tr>
      <tr>
        <td class="table-active">PROMOTION 2</td>
        <?php fetch($result,'Promotion_2')?>
      </tr>
      <tr>
        <td class="table-active">DATE PROMOTION 2</td>
        <?php fetch($result,'Date_promotion_2')?>
      </tr>
    
    </tbody>
  </table>
</div>


</body>
</html>