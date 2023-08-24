<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["submit-m"])) {

    $accountemail = $_POST["uemail"];
    $billingaddress = $_POST["baddress"];
    $contactnumber = $_POST["cnumber"];
    $subscriptionstatus = "Monthly";

    require_once 'dbh.inc.php'; //to connect in the database
    require_once 'functions.inc.php';

    //error handlers
    if (emptyInputLogin($accountemail, $billingaddress, $contactnumber) !== false) {
        header("location: ../billing.php?error=emptyinput");
        exit();
    }
    if (subscriptionExists($conn, $accountemail) !== false) {
        header("location: ../index.php?error=accountisalreadysubscribed");
        exit();
    }


    

    //loginUser($conn, $username, $password);
    subscribeUser($conn, $accountemail, $billingaddress, $contactnumber, $subscriptionstatus);

    $accountnumber = accountNumber($conn, $accountemail);

    //sending receipt for monthly subscription.

    require '../phpmailer/PHPMailer.php';
    require '../phpmailer/SMTP.php';
    require '../phpmailer/Exception.php';
    //Define name spaces
    //use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\SMTP;
    //use PHPMailer\PHPMailer\Exception;
    //Create instance of PHPMailer
    $mail = new PHPMailer();
    //Set mailer to use smtp
    $mail->isSMTP();
    //Define smtp host
    $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
    $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
    $mail->SMTPSecure = "tls";
    //Port to connect smtp
    $mail->Port = "587";
    //Set gmail username
    $mail->Username = "reymarkcalexterioo@gmail.com";
    //Set gmail password
    $mail->Password = "tiibdnxmhtpywukp";
    //Email subject
    $mail->Subject = "broCode | Official Receipt";
    //Set sender email
    $mail->setFrom('reymarkcalexterioo@gmail.com');
    //Enable HTML
    $mail->isHTML(true);
    //Attachment
    //	$mail->addAttachment('img/attachment.png');
    //Email body
    $mail->Body = '<h1>Thank you for subscribing for monthly plan in broCode.</h1></br>';
    //di ko pa mapagana yung sa account number yawa
    $mail->Body .= '<p>This account is now subscribe under account number ' . $accountnumber . ' for paying $9.99 / monthly.</p></br> ';
    //$mail->Body .= '<p>This account is now subscribe under account number</p></br> ';
    $mail->Body .= '<p>By purchasing, you authorize broCode to charge you the price above for the duration you selected. </br> Should you encounter any issues with your password or any of the steps in securing the copy of your official receipt, we will be happy to assist you through our customer service site or hotline numbers: <a href="broCode.com">broCode.com</a></p>';
    //$mail->Body .= '<a href="' . $url . '">' . $url . '</a></p>';
    //Add recipient
    $mail->addAddress($accountemail);
    if ( $mail->send() ) {
        //header("Location: ../reset-password.php?reset=success");
        header("location: ../subscription.php?error=yournowsubscribe");
    }

}

elseif (isset($_POST["submit-y"])) {

    $accountemail = $_POST["uemail"];
    $billingaddress = $_POST["baddress"];
    $contactnumber = $_POST["cnumber"];
    $subscriptionstatus = "Yearly";

    require_once 'dbh.inc.php'; //to connect in the database
    require_once 'functions.inc.php';

    //error handlers
    if (emptyInputLogin($accountemail, $billingaddress, $contactnumber) !== false) {
        header("location: ../billing.php?error=emptyinput");
        exit();
    }
    if (subscriptionExists($conn, $accountemail) !== false) {
        header("location: ../index.php?error=accountisalreadysubscribed");
        exit();
    }
    //loginUser($conn, $username, $password);
    subscribeUser($conn, $accountemail, $billingaddress, $contactnumber, $subscriptionstatus);

    $accountnumber = accountNumber($conn, $accountemail);

    //sending receipt for yearly subscription.

    require '../phpmailer/PHPMailer.php';
    require '../phpmailer/SMTP.php';
    require '../phpmailer/Exception.php';
    //Define name spaces
    //use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\SMTP;
    //use PHPMailer\PHPMailer\Exception;
    //Create instance of PHPMailer
    $mail = new PHPMailer();
    //Set mailer to use smtp
    $mail->isSMTP();
    //Define smtp host
    $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
    $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
    $mail->SMTPSecure = "tls";
    //Port to connect smtp
    $mail->Port = "587";
    //Set gmail username
    $mail->Username = "reymarkcalexterioo@gmail.com";
    //Set gmail password
    $mail->Password = "tiibdnxmhtpywukp";
    //Email subject
    $mail->Subject = "broCode | Official Receipt";
    //Set sender email
    $mail->setFrom('reymarkcalexterioo@gmail.com');
    //Enable HTML
    $mail->isHTML(true);
    //Attachment
    //	$mail->addAttachment('img/attachment.png');
    //Email body
    $mail->Body = '<h1>Thank you for subscribing for yearly plan in broCode.</h1></br>';
    //di ko pa mapagana yung sa account number yawa
    $mail->Body .= '<p>This account is now subscribe under account number ' . $accountnumber . ' for paying $99.99 / yearly. </p></br> ';
    //$mail->Body .= '<p>This account is now subscribe under account number</p></br> ';
    $mail->Body .= '<p>By purchasing, you authorize broCode to charge you the price above for the duration you selected. </br> Should you encounter any issues with your password or any of the steps in securing the copy of your official receipt, we will be happy to assist you through our customer service site or hotline numbers: <a href="broCode.com">broCode.com</a></p>';
    //$mail->Body .= '<a href="' . $url . '">' . $url . '</a></p>';
    //Add recipient
    $mail->addAddress($accountemail);
    if ( $mail->send() ) {
        //header("Location: ../reset-password.php?reset=success");
        header("location: ../subscription.php?error=yournowsubscribe");
    }
}

else {
    header("location: ../login.php");
    exit();
}

$mail->smtpClose();