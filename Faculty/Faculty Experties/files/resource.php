<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `faculty_as_resource` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>FACULTY AS A RESOURCE PERSON</h2>
    
  <div class="scroll">
  <table class="table table-hover table-sm">

      <tr>
        <th class="table-active">RESOURCE PERSON</th>
        <?php fetch($result,'Resource_person')?>
      </tr>
      <tr>
        <th class="table-active">TOPIC NAME</th>
        <?php fetch($result,'Topic_name')?>
      </tr>
      <tr>
        <th class="table-active">EVENT NAME</th>
        <?php fetch($result,'Event_name')?>
      </tr>
      <tr>
        <th class="table-active">LEVEL</th>
        <?php fetch($result,'Level')?>
      </tr>
      <tr>
        <th class="table-active">VENUE</th>
        <?php fetch($result,'Venue')?>
      </tr>
      <tr>
        <th class="table-active">DATE</th>
        <?php fetch($result,'Date')?>
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