<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `competitive_exam` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>COMPETITIVE EXAMS</h2>
            
  <div class="scroll">
  <table class="table table-hover table-sm">

      <tr>
        <th class="table-active">PET APPEARED</th>
        <?php fetch($result,'PET_appeared')?>
      </tr>
      <tr>
        <th class="table-active">PET DATE</th>
        <?php fetch($result,'PET_date')?>
      </tr>
      <tr>
        <th class="table-active">PET SCORE</th>
        <?php fetch($result,'PET_score')?>
      </tr>
      <tr>
        <th class="table-active">GATE APPEARED</th>
        <?php fetch($result,'GATE_appeared')?>
      </tr>
      <tr>
        <th class="table-active">GATE DATE</th>
        <?php fetch($result,'GATE_date')?>
      </tr>
      <tr>
        <th class="table-active">GATE SCORE</th>
        <?php fetch($result,'GATE_score')?>
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