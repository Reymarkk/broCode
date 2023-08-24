<?php
session_start();

//if monthly
if(isset($_POST["submit-m"])) {

    //$subscriptionStatus = "Monthly"
    //require_once 'dbh.inc.php'; //to connect in the database
    //require_once 'functions.inc.php';

    //error handlers
    //if the user is already login it will be directed in billing page.
    if (isset($_SESSION["useruid"])) {
        header("location: ../billing-m.php");
        exit();
    }

    //if the user is still not login in the system, the user will be directed into login page.
    //loginUser($conn, $username, $password);
    header("location: ../login.php?error=loginfirst");
}

//if yearly
elseif (isset($_POST["submit-y"])) {
    //require_once 'dbh.inc.php'; //to connect in the database
    //require_once 'functions.inc.php';

    //error handlers
    //if the user is already login it will be directed in billing page.
    if (isset($_SESSION["useruid"])) {
        header("location: ../billing-y.php");
        exit();
    }

    //if the user is still not login in the system, the user will be directed into login page.
    //loginUser($conn, $username, $password);
    header("location: ../login.php?error=loginfirst");
}

//if something goes wrong/error the user will be directed in homepage
else {
    header("location: ../index.php");
    exit();
}


