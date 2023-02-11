<?php
    $dbHost = 'localhost';  //database host name
    $dbUser = 'username';       //database username
    $dbPass = 'password';           //database password
    $dbName = 'database'; //database name
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>