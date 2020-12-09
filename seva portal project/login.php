<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>form1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h1 class="display-2 text-center shadow" style="font-size: 150 px;height: 100 px;"><img src="assets/img/satyamev-jayate-logo-png-.png" width="200 px" height="200 px">Seva Portal</h1>
    <p class="text-center" style="opacity: 0.68;"><br>Consular, Passport &amp; Visa Division<br>Ministry of External Affairs, Government of India<br><br></p>
    <div class="shadow-lg login-clean">
        <form method="post">
        <?php include('errors.php'); ?>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-contact-outline" style="color: rgb(17,7,9);"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" ></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit1" name="submit1" style="background-color: rgb(34,192,203);">Log In</button></div><a class="forgot" href="forgotpass.php">Forgot your email or password?</a><a href="Registration.php" style="display: block;text-align: center;font-size: 12px;color: #6f7a85;opacity: 0.9;text-decoration: none;">&nbsp;Create an account</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>