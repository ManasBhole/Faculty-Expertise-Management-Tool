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
                SELECT * FROM `faculty_long_live` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
        ?>>
        <div class="container">
  <h2>FACULTY LONG LIVE</h2>
              
  <table class="table table-hover table-sm">

    <tbody>
      <tr>
        <td class="table-active">FACULTY NAME</td>
        <?php fetch($result,'Faculty_name')?>
      </tr>
      <tr>
        <td class="table-active">REASON OF LONG LIVE</td>
        <?php fetch($result,'Reason_long_live')?>
      </tr>
      <tr>
        <td class="table-active">FROM DATE</td>
        <?php fetch($result,'From_date')?>
      </tr>
      <tr>
        <td class="table-active">TO DATE</td>
        <?php fetch($result,'To_date')?>
      </tr>
      <tr>
        <td class="table-active">DATE OF JOINING AFTER LONG LIVE</td>
        <?php fetch($result,'Date_of_joining_after_long_live')?>
      </tr>
      <tr>
        
    
    </tbody>
  </table>
</div>


</body>
</html>