<?php

    if($_SESSION['UserName'] != 'admin'){
    header('location:login.php');
exit();}
    else{
        
        echo("Hello".$_SESSION['R_UserName'].'.');
    }
    ?>