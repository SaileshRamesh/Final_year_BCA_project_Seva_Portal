<!DOCTYPE html>
<?php include('server.php')?>
<html>
<style>
    select {
        width: 300px;
        margin: 10px;
    }
    select:focus {
        min-width: 300px;
        width: auto;
    }    
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr></tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="text-center text-sm-center text-md-center text-lg-center text-xl-center register-photo" style="width: 700px;margin-left: 350px;">
        <div class="form-container">
            <form method="post" style="height: 100px;width: 150px;">
            <?php include('errors.php')?>
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <div class="dropdown"></option>
</select>
                    </div><input class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Given Name" style="margin-top: 20px;"></label><input class="form-control" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email Id"
                        style="margin-top: 20px;"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password_repeat" placeholder="Password (repeat)"><br>
                    <div class="dropdown"></option>
</select>
                        <div class="dropdown-menu" role="menu"></div>
                    </div></div><br>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="checkbox" value="check"></label><a href="index.html" style="margin-top: 5px;" >I agree to the license terms.</a></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="submit4" type="submit4" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}">Sign Up</button></div><a class="already" href="adminlogin.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>