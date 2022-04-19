<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form method="post" action="" name="signin-form">
    <title>Document</title>
    <link rel='stylesheet' href='css/styles.css'>
    <script src="jquery.js"></script>
</head>
<body>
    
<div class="head">
    <?php
    include 'navbar.php';
    ?>
</div>
<div class="login">
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label><br>
        <input type="text" name="UserName" required />
    </div>
    <div class="form-element">
        <label>Password</label><br>
        <input type="password" name="Password" required/>
        
    </div>
    <button type="submit" name="login" value="login">Log In</button>
    <?php
     
    ?>
    <div class="notfound">
        <!-- error apears here-->
    </div>
    Have no account? 
    Click<a href='register.php'>here </a> to register
</form>  

<?php
    session_start();
    include 'config.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $UserName = $_POST['UserName'];
        $Password =$_POST['Password'];
        $Password= md5($Password);

        $sql= mysqli_query($conn, "SELECT * FROM users
        WHERE UserName ='$UserName' OR Email='$UserName'
        AND Password = '$Password'") or DIE(mysqli_error());


        if(mysqli_num_rows($sql)>0)
        {

            //Getting Real UserName from The Email or userName input in login form

            $UserName=$_SESSION['UserName'];
            $sql1="SELECT UserName FROM users 
            WHERE UserName ='$UserName'
            OR Email='$UserName'";
            $_SESSION['R_UserName']=mysqli_query($conn,$sql1);
            
            //Converting SQL query output from array to string

            foreach($_SESSION['R_UserName'] as $k=>$v){
                foreach($v as $lk=>$liveUser){ 
                   $liveUser;
                    echo(var_dump($_SESSION['UserName']));
                    
                header('location:books.php');
                exit;
            }
            }
            
            }
        else{ 
            echo"<script>
            $(document).ready(function(){
                $('.notfound').append('Wrong username or pasword.<br>please check and try again.');
            })
            </script>";
            
        }
        
    }
    
?>  
</div>
</body>
</html>