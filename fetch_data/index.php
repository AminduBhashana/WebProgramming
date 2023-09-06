<?php
  require_once('db.php');
  $query = "SELECT * FROM users";
  $result = mysqli_Query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data from database in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="width: 100%;text-align: center; font-size: large; font-weight: bold;">
        <div class="card-header">
            Fetch Data from database in PHP
        </div>
      </div>
      <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>User Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Date of Birth</td>
          </tr>
          <tr>
            <?php
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['dob'];?></td>
          </tr>
          <?php  
            }
          ?>
          
      </table>
</body>
</html>