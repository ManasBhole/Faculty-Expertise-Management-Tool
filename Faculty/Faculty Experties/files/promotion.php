<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `faculty_promotion` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>FACULTY PROMOTION</h2>
            
  <div class="scroll">
  <table class="table table-hover table-sm">

      <tr>
        <th class="table-active">DATE OF JOINING</th>
        <?php fetch($result,'Date_of_joining')?>
      </tr>
      <tr>
        <th class="table-active">SDRN NUMBER</th>
        <?php fetch($result,'SDNR_number')?>
      </tr>
      <tr>
        <th class="table-active">RAIT EXPERIENCE</th>
        <?php fetch($result,'RAIT_experience')?>
      </tr>
      <tr>
        <th class="table-active">OTHER EXPERIENCE</th>
        <?php fetch($result,'Other_experience')?>
      </tr>
      <tr>
        <th class="table-active">INDUSTRY EXPERIENCE</th>
        <?php fetch($result,'Industry_experience')?>
      </tr>
      <tr>
        <th class="table-active">TOTAL EXPERIENCE</th>
        <?php fetch($result,'Total_experience')?>
      </tr>
      <tr>
        <th class="table-active">STARTING DESIGNATION</th>
        <?php fetch($result,'Starting_designation')?>
      </tr>
      <tr>
        <th class="table-active">PROMOTION 1</th>
        <?php fetch($result,'Promotion_1')?>
      </tr>
      <tr>
        <th class="table-active">DATE PROMOTION 1</th>
        <?php fetch($result,'Date_promotion_1')?>
      </tr>
      <tr>
        <th class="table-active">PROMOTION 2</th>
        <?php fetch($result,'Promotion_2')?>
      </tr>
      <tr>
        <th class="table-active">DATE PROMOTION 2</th>
        <?php fetch($result,'Date_promotion_2')?>
      </tr>
      <tr>
        <th class="table-active" style="padding-top:1rem">UPLOADS</th>
        <?php fetch($result,'pdf')?>
      </tr>

  </table>
  </div>
  
</div>
</body>
</html>