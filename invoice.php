<?php
    session_start();
    include_once 'database.php';
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    echo "$username";
    echo "$id";
    $result = mysqli_query($conn,"UPDATE dogs SET adoptedby = '$username' WHERE id = '$id'");
    // $sql = "update dogs set adoptedby = $username where id = $id";
    if ($result){
        echo "Successful";
    }   
    else{
        echo $mysqli -> error;
    } 
//   $result = mysqli_query($conn,"SELECT * FROM `dogs` WHERE id='" . $_GET['id'] . "'");
//   if (mysqli_num_rows($result) > 0){
//     $row = mysqli_fetch_array($result);
//     $path =  'image/'.$row['filename'];
//     $_SESSION['id'] = $_GET['id'];
//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


