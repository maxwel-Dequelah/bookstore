<?php
    

    if(empty($_SESSION['UserName']) || $_SESSION['UserName'] == '')
    {
        header("Location: login.php");
        die('NO such user Name');
    }
    else{
        echo'Hello  '.$_SESSION['R_UserName'].' Do you wanna change your pasord?';
        echo"<a href='logout.php'><button >logout</button></a>";
                        
       }       
?>