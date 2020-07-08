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
    <title>Resources</title>
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `faculty_as_resource` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>FACULTY AS A RESOURCE PERSON</h2>
              
  <table class="table table-hover table-sm">

    <tbody>
      <tr>
        <td class="table-active">RESOURCE PERSON</td>
        <?php fetch($result,'Resource_person')?>
      </tr>
      <tr>
        <td class="table-active">TOPIC NAME</td>
        <?php fetch($result,'Topic_name')?>
      </tr>
      <tr>
        <td class="table-active">EVENT NAME</td>
        <?php fetch($result,'Event_name')?>
      </tr>
      <tr>
        <td class="table-active">LEVEL</td>
        <?php fetch($result,'Level')?>
      </tr>
      <tr>
        <td class="table-active">VENUE</td>
        <?php fetch($result,'Venue')?>
      </tr>
      <tr>
        <td class="table-active">DATE</td>
        <?php fetch($result,'Date')?>
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