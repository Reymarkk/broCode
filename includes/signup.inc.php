<?php

if (isset($_POST["submit"])){
    //this will go here if the user completed the signup form

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    require_once 'dbh.inc.php'; //start the connection to the database
    require_once 'functions.inc.php'; //

    //error handlers
    if (emptyInputSignup($name, $email, $username, $password, $cpassword) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password, $cpassword) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);

}
else {
    //user will throwback into the signup page again if they didn't properly fill up the sign up page.
    header("location: ../signup.php");
}