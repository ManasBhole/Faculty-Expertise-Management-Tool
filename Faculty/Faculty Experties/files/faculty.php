<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
            $sql="
                SELECT * FROM `faculty_info` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
    ?>
        <div class="container">
  <h2>FACULTY INFO</h2>
              
  <div class="scroll">
  <table class="table table-hover table-sm">
  
    <tr>
        <th class="table-active">NAME</th>
        <?php fetch($result,'name')?>
    </tr>
    <tr>
        <th class="table-active">DOB</th>
        <?php fetch($result,'DOB')?>
    </tr>
    <tr>
        <th class="table-active">DEPARTMENT</th>
        <?php fetch($result,'Department')?>
    </tr>
    <tr>
        <th class="table-active">CONTACT NO</th>
        <?php fetch($result,'Contact_no')?>
    </tr>
    <tr>
        <th class="table-active">DATE OF JOINING</th>
        <?php fetch($result,'Doj')?>
    </tr>
    <tr>
        <th class="table-active">QUALIFICATION</th>
        <?php fetch($result,'Qualification')?>
    </tr>
    <tr>
        <th class="table-active">DESIGNATION</th>
        <?php fetch($result,'Desig')?>
    </tr>   
    <tr>
        <th class="table-active">EMAIL</th>
        <?php fetch($result,'Email')?>
    </tr>
  </table>
  </div>
</div>
</body>
</html>