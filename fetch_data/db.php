<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbname = "testmiha";
    $conn = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbname);
    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    echo "Connection Successful";
?>