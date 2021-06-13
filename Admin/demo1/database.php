<?php
$response = array();


$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "admin_side";

$conn = mysqli_connect($server_name , $username , $password , $dbname);

if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}

?>