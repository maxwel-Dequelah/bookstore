<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='css/styles.css'>
    <script src="jquery.js"></script>
</head>
<body>
    
<div class="main">
<!--
    navbar code goes down here.
-->
    <?php
        include 'navbar.php';
    ?>
    
<!--
    end of navbar code
-->


<!-- the main body section of the HTML-->
<div class="sections">
    <div class="section1">
        <h2> Book Categories</h2>
        <?php
            include 'categories.php';
        ?>
    </div>
    <div class="section2">
        
<!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="css/bg1.jpg" style='{
                    width:100%;
                    height:300px}'>
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="css/bg2.jpg" style="{
                    width:100%;
                    height:300px>}">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src=css/bg1.jpg style='{
                    width:100%;
                    height:300px;}'>
                <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>


    </div>

</div>

</div>
<div class="footer">
    <?php
        include 'footer.php';
    ?>
</div>
</body>
</html>