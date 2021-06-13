<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "admin_side";
$conn = mysqli_connect($server_name , $username , $password , $dbname);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>