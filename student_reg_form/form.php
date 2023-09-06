<?php
    $myName = $_POST['name'];
    $gender = $_POST['gtype'];
    $district = $_POST['mycity'];
    
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword =  "";
    $dbname = "php_practise";
    $conn = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }else{
        //echo "Connection Successful";
        $query = "INSERT INTO student VALUES(DEFAULT,'$myName','$gender','$district')";
        if(mysqli_query($conn,$query)){
            echo "Data has been inserted";
        }else{
            echo "error has been occurred";
        }     
    }

    $sql = "SELECT * FROM student";
    $result1 = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data from database in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>
<body>
<div class="card" style="width: 100%;text-align: center; font-size: large; font-weight: bold;">
        <div class="card-header">
            Fetch Data from database in PHP
        </div>
      </div>
      <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Student Id</td>
            <td>Name</td>
            <td>Gender</td>
            <td>District</td>
          </tr>
          <tr>
            <?php
              while($row = mysqli_fetch_assoc($result1)){
            ?>
            <td><?php echo $row['student_id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['city'];?></td>
          </tr>
          <?php  
            }
          ?>
          
      </table>
</body>
</html>