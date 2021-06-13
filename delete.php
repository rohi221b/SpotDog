<?php
include_once 'database.php';
$response = array();

    $sql = "DELETE FROM dogs WHERE id='" . $_GET["id"] . "'";
    $result = $conn->query($sql);
    if($result)
    {
        $response['error'] = false;
        $response['message'] = "Record Deleted Successfully";
    

    }
    else
    {
        $response['error'] = true;
        $response['message'] = "Record Deletion  Failed";
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    $conn->close();
 
    header("Location: display.php");
    exit;
?>