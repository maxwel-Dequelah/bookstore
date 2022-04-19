<?php
    $Host = '127.0.0.1';
    $username   = 'root'; // Username
    $password   = ''; // Password
    $dbname     = "bookstore";
    $conn       = mysqli_connect($Host,$username,$password,"$dbname");
    
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }
?>