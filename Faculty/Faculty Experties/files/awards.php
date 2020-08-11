<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
            $sql="
                SELECT * FROM `awards` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
    ?>
        <div class="container">
  <h2>AWARDS</h2>
              
  <div class="scroll">
  <table class="table table-hover table-sm">
  
      <tr>
        <th class="table-active">AWARD NAME</th>
        <?php fetch($result,'Award_name')?>
      </tr>
      <tr>
        <th class="table-active">TITLE OF INNOVATION</th>
        <?php fetch($result,'Title_of_innovation')?>
      </tr>
      <tr>
        <th class="table-active">NAME OF AWARDEE</th>
        <?php fetch($result,'Name_of_awardee')?>
      </tr>
      <tr>
        <th class="table-active">POSITION</th>
        <?php fetch($result,'Position')?>
      </tr>
      <tr>
        <th class="table-active">EVENT NAME</th>
        <?php fetch($result,'Event_name')?>
      </tr>
      <tr>
        <th class="table-active">AWARDING AGENCY</th>
        <?php fetch($result,'Awarding_agency')?>
      </tr>
      <tr>
        <th class="table-active">CATEGORY</th>
        <?php fetch($result,'Category')?>
      </tr>
      <tr>
        <th class="table-active">DATE</th>
        <?php fetch($result,'Date')?>
      </tr>
      <tr>
        <th class="table-active">UNIVERSITY</th>
        <?php fetch($result,'University')?>
      </tr>
      <tr>
        <th class="table-active">COLLEGE NAME</th>
        <?php fetch($result,'College_name')?>
      </tr>
      <tr>
        <th class="table-active">LEVEL</th>
        <?php fetch($result,'Level')?>
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