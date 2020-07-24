<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `faculty_long_live` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>FACULTY LONG LIVE</h2>
        
  <div class="scroll">
  <table class="table table-hover table-sm">

      <tr>
        <th class="table-active">REASON OF LONG LIVE</th>
        <?php fetch($result,'Reason_long_live')?>
      </tr>
      <tr>
        <th class="table-active">FROM DATE</th>
        <?php fetch($result,'From_date')?>
      </tr>
      <tr>
        <th class="table-active">TO DATE</th>
        <?php fetch($result,'To_date')?>
      </tr>
      <tr>
        <th class="table-active">DATE OF JOINING AFTER LONG LIVE</th>
        <?php fetch($result,'Date_of_joining_after_long_live')?>
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