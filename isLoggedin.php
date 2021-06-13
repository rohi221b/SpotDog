<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: adopt.php");
        exit;
    }
    else{
        header("Location: Login_v3/login.php?flag=1");
        exit;
    }
?>