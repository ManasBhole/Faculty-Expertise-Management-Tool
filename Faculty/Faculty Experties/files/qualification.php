<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `qualification` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>QUALIFICATION</h2>
  
  <div class="scroll">
  <table class="table table-hover table-sm">

      <tr>
        <th class="table-active">ADMITTED FOR PROGRAM</th>
        <?php fetch($result,'Admitted_for_program')?>
      </tr>
      <tr>
        <th class="table-active">SPECIALIZATION</th>
        <?php fetch($result,'Specialization')?>
      </tr>
      <tr>
        <th class="table-active">YEAR OF ADMISSION</th>
        <?php fetch($result,'Year_of_admission')?>
      </tr>
      <tr>
        <th class="table-active">UNIVERSITY</th>
        <?php fetch($result,'University')?>
      </tr>
      <tr>
        <th class="table-active">REGISTRATION NUMBER</th>
        <?php fetch($result,'Registration_number')?>
      </tr>
      <tr>
        <th class="table-active">COLLEGE NAME</th>
        <?php fetch($result,'College_name')?>
      </tr>
      <tr>
        <th class="table-active">STATUS</th>
        <?php fetch($result,'Status')?>
      </tr>
      <tr>
        <th class="table-active">RESEARCH TOPIC</th>
        <?php fetch($result,'Research_topic')?>
      </tr>
      <tr>
        <th class="table-active">GUIDE NAME</th>
        <?php fetch($result,'Guide_name')?>
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