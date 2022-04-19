<?php
    include 'redirect_login.php';
    unset($_SESSION['UserName']);
    session_destroy();
    header('location: login.php');
    exit;
?>