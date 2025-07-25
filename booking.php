<?php
    session_start();
    // if there is no user id in this session, go to login page. 
    if (!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit();
    }
    $username=$_SESSION['username'];
    $email=$_SESSION['email'];
?>