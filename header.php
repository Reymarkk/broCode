<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>broCode | Let's code bro, shesh</title>
     <!-- -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="courses/images/BC.jpg"/> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--<script type="text/javascript" src="animation.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="brocode_product.css">
-->
  </head>
  
  <body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="index.php" data-aos="zoom-out" data-aos-delay="500">bro<span>Code</span></a>
            
            <img id="mobile-cta" class="mobile-menu" src="images/icons8-menu.svg" alt="open navigation" data-aos="zoom-out" data-aos-delay="2000">

            <nav class="">
                <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="close navigation">
                <ul class="primary-nav">
                    <li><a href="index.php">Home</a></li> <!--shift down arrow keys to duplicate-->
                    <li><a href="#features">Features</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="#contact">Contact</a></li> <!--shift down arrow keys to duplicate-->
                    <li class='go-login-cta'><a href='subscription.php'>Subscribe</a></li>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                    ?>
            </nav>
        </div>
    </div>