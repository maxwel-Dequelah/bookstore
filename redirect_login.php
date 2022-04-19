
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
            $_SESSION['UserName'] = $UserName;
            header('location:books.php');
        
           // foreach ($sql as $k => $v) {
               // foreach($v as $v1){
                 //   echo "$v1<br>";
               // }
            //}
           

        }
        else 
        header('location:login.php');
        { echo"<script src='jquery.js'>
            $(document).ready(function(){
                $('notfound').text('Wrong username or pasword.')
            })
            </script>";
            
        }
        
    }
    
?>