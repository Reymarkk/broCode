<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>broCode | Let's code bro, shesh</title>
     <!-- -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/main.css"> 
  </head>
  <body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="index.html" data-aos="zoom-out" data-aos-delay="2000">bro<span>Code</span></a>
            
            <img id="mobile-cta" class="mobile-menu" src="images/icons8-menu.svg" alt="open navigation" data-aos="zoom-out" data-aos-delay="2000">

            <nav class="">
                <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="close navigation">
                <ul class="primary-nav">
                    <li><a href="current">Home</a></li> <!--shift down arrow keys to duplicate-->
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Code</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="#">Contact</a></li> <!--shift down arrow keys to duplicate-->
                    <li class="go-login-cta"><a href="login.php">Donate</a></li>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>

    