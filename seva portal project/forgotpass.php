<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>forgotpass</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-locked" style="color: rgb(4,1,2);"></i>
                <h3 style="color: rgb(20,8,11);font-size: 30px;">Forgot Password?</h3>
                <p style="font-size: 15px;color: rgb(31,4,10);">you can reset your password here</p>
            </div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="reset-password" style="background-color: rgb(79,138,227);">Send My Password</button></div><a class="text-center" href="login.php" style="width: 5px;height: 5px;color: rgb(86,114,145);font-size: 12px;text-align: center;position: relative;left: 70px;">Go back to login</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require  'config.php';


if(isset($_POST["email"])){
   $emailTo = $_POST["email"];
   $code = uniqid(true);
   $query=mysqli_query($link,"INSERT into resetpassword(code,email) VALUES ('$code','$emailTo')");
   if(!$query){
       exit("Error");
   }
// Instantiation and passing `true` enables exceptions
   $mail = new PHPMailer(true);
try {
    //Server settings                     
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'heerasailesh@gmail.com';                     // SMTP username
    $mail->Password   = '7760002197';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('heersailesh@gmail.com', 'Mailer');
    $mail->addAddress("$emailTo");     // Add a recipient
    $mail->addReplyTo('saileshsyrus@gmail.com', 'No reply');

    // Content
    $url ="http://". $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/new_pass.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your Password Link';
    $mail->Body    = "<h1>You requested a password reset</h1>
                        Click <a href='$url'>this link<a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Reset password has been sent, Please click on the link in your mail to reset Password';
 } 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit();
}
?>