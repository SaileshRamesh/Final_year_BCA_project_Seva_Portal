<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>resetpass</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/visionae-reset-password-1.css">
    <link rel="stylesheet" href="assets/css/visionae-reset-password.css">
</head>

<body>
    <div class="shadow-sm login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <h1 class="text-center" style="position: inherit;margin: 10px 10px 10px;filter: blur(0px) grayscale(0%) hue-rotate(0deg) invert(0%);font-size: 30px;margin-bottom: 30px;">Reset-Password</h1>
            <h3 class="text-center"><input class="border rounded shadow-sm form-control" type="password" placeholder="New-password" name="password" style="margin-bottom: 30px;margin-top: 20px;"></h3><input class="border rounded form-control" type="password" name="repeat_pass" placeholder="Password (repeat)">
            <button class="btn btn-primary btn-block" type="submit" style="background-color: #003dff;margin-left: 0px;padding-right: 0px;">Reset my password !</button><a class="text-center forgot" href="login.php">Remember it ?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include("config.php");
if(!isset($_GET["code"])){
    exit("Can't find page");
}
$code=$_GET["code"];
$getEmailQuery=mysqli_query($link,"SELECT email FROM resetpassword WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery)==0){
    exit("Can't find page");
}
if(isset($_POST["password"])){
    $pw=$_POST["password"];
    $pw=md5($pw);
    $row=mysqli_fetch_array($getEmailQuery);
    $email=$row["email"];
    $query=mysqli_query($link,"UPDATE registration SET password='$pw' WHERE email='$email'");
    if($query){
        $query=mysqli_query($link,"DELETE FROM resetpassword WHERE code='$code'");
        exit("Password updated");
    }else{
    exit("Password updated");
}
}
?>