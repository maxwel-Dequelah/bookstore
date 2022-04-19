<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="jquery.js"></script>
</head>
<body>
    <div class="main">
    <?php
        include 'navbar.php';
    ?>
        <div class="sighn-up">
            <form action="login_submit.php" method="POST">
                Name: <br>
                <input required type="text" name="name" placeholder='your name' ><br>
                E-mail: <br>
                <input type="email" required name="email" placeholder='examplexyz@abc.com'><br>
                Date of Birth: <br>
                <input type="date" name="date" 
                    min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" required><br>
                pasword: <br>
                <input type="password" name='password' required><br>
                <input name="submit" type='submit' value='Submit'><br>
                Have an account?<br>
                Click <a href="login.php">login </a> instead.
            </form>
        </div>
    </div>
</body>
</html>

