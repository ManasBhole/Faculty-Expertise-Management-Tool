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
    <title>Qualification</title>
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `qualification` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>QUALIFICATION</h2>
              
  <table class="table table-hover  table-sm">

    <tbody>
      <tr>
        <td class="table-active">ADMITTED FOR PROGRAM</td>
        <?php fetch($result,'Admitted_for_program')?>
      </tr>
      <tr>
        <td class="table-active">SPECIALIZATION</td>
        <?php fetch($result,'Specialization')?>
      </tr>
      <tr>
        <td class="table-active">YEAR OF ADMISSION</td>
        <?php fetch($result,'Year_of_admission')?>
      </tr>
      <tr>
        <td class="table-active">UNIVERSITY</td>
        <?php fetch($result,'University')?>
      </tr>
      <tr>
        <td class="table-active">REGISTRATION NUMBER</td>
        <?php fetch($result,'Registration_number')?>
      </tr>
      <tr>
        <td class="table-active">COLLEGE NAME</td>
        <?php fetch($result,'College_name')?>
      </tr>
      <tr>
        <td class="table-active">STATUS</td>
        <?php fetch($result,'Status')?>
      </tr>
      <tr>
        <td class="table-active">RESEARCH TOPIC</td>
        <?php fetch($result,'Research_topic')?>
      </tr>
      <tr>
        <td class="table-active">GUIDE NAME</td>
        <?php fetch($result,'Guide_name')?>
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