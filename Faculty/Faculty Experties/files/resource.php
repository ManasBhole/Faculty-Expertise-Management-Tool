<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Resources</title>
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `faculty_as_resource` WHERE `Faculty_name`='$name';
            ";
            $result=$conn->query($sql);
            $rows=mysqli_fetch_assoc($result);
        ?>
        <div class="container">
  <h2>FACULTY AS A RESOURCE PERSON</h2>
              
  <table class="table table-hover">

    <tbody>
      <tr>
        <td>FACULTY NAME</td>
        <td></<?php echo($rows['Faculty_name'])?></td>
      </tr>
      <tr>
        <td>RESOURCE PERSON</td>
        <td><?php echo($rows['Resource_person'])?></td>
      </tr>
      <tr>
        <td>TOPIC NAME</td>
        <td><?php echo($rows['Topic_name'])?></td>
      </tr>
      <tr>
        <td>EVENT NAME</td>
        <td><?php echo($rows['Event_name'])?></td>
      </tr>
      <tr>
        <td>LEVEL</td>
        <td><?php echo($rows['Level'])?></td>
      </tr>
      <tr>
        <td>VENUE</td>
        <td><?php echo($rows['Venue'])?></td>
      </tr>
      <tr>
        <td>DATE</td>
        <td><?php echo($rows['Date'])?></td>
      </tr>
    
    </tbody>
  </table>
</div>


</body>
</html>