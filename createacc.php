
<?php
    include 'config.php';
    $UserName=trim($_POST['name']);
    $Email=trim($_POST['email']);
    $dateOfBirth=$_POST['date'];
    $Password=trim($_POST['password']);

    //validate input
    if($UserName !='' && $Email !='' && $dateOfBirth !='' && $Password !='')
    {
        //generate th pasword hash.
        $Password = md5($Password);
        
        
            $sql = "INSERT INTO users (UserName, Email, dateOfBirth, Password)
            VALUES ('$UserName', '$Email', '$dateOfBirth','$Password')";

            if (mysqli_query($conn, $sql))
            {
                
                
                echo'<span> New record created successfully<span><br>';
                
            } 
            else
                {   
                    $Emails=mysqli_query($conn, "SELECT Email FROM users 
                    WHERE Email='$Email' OR UserName='$Email'");
                    if(mysqli_num_rows($Emails)!=0){
                    include 'navbar.php';
                    echo('The Email or User Name already in record<br>');
                        echo "Return to <a href='login.php'>login</a>";
                    }
               
                  
                
                }

    }

?>