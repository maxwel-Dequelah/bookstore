<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>list</title>
</head>
<body>
    <button  class='submit' type='submit'>
        read
    </button>
    <?php
$myfile = fopen("files/names.txt", "r+") or die("Unable to open file!");
// Output one character until end-of-file

echo fgetc($myfile);
while(!feof($myfile)){
    echo fgetc($myfile);
}
echo(fclose($myfile));
?>


</body>
</html>