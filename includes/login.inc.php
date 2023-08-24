<?php

if(isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php'; //to connect in the database
    require_once 'functions.inc.php';

    //error handlers
    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
}

else {
    header("location: ../login.php");
    exit();
}