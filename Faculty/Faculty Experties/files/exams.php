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
    <title>Exams</title>
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `competitive_exam` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>COMPETITIVE EXAMS</h2>
              
  <table class="table table-hover  table-sm">

    <tbody>
      <tr>
        <td class="table-active">PET APPEARED</td>
        <?php fetch($result,'PET_appeared')?>
      </tr>
      <tr>
        <td class="table-active">PET DATE</td>
        <?php fetch($result,'PET_date')?>
      </tr>
      <tr>
        <td class="table-active">PET SCORE</td>
        <?php fetch($result,'PET_score')?>
      </tr>
      <tr>
        <td class="table-active">GATE APPEARED</td>
        <?php fetch($result,'GATE_appeared')?>
      </tr>
      <tr>
        <td class="table-active">GATE DATE</td>
        <?php fetch($result,'GATE_date')?>
      </tr>
      <tr>
        <td class="table-active">GATE SCORE</td>
        <?php fetch($result,'GATE_score')?>
      </tr>
      <tr>
        <td class="table-active" style="padding-top:1rem">UPLOADS</td>
        <?php fetch($result,'pdf')?>
      </tr>

    </tbody>
  </table>

</div>
</body>
</html>