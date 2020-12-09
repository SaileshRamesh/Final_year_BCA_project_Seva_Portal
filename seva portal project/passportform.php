<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<?php
error_reporting(0);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>passportform</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<form action="" method="post" enctype="multipart/form-data">
<body style="width: 835px;"><img src="assets/img/passhead.PNG" style="margin-left: 220px;width: 900px;">
    <div class="container" style="width: 900px;margin-left: 220px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <?php include('errors.php'); ?>
                    <tr>
                        <th>Applying for*</th>
                        <th><select required="" name="apply" value="<?php echo $apply; ?>" ><option value="" selected></option><option value="Fresh Passport">Fresh Passport</option><option value="Re-issue of Passport">Re-issue of Passport</option></select></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Gender*</strong></td>
                        <td><select name="gender" required="" value="<?php echo $gender; ?>" ><option value="" selected></option><option value="Male">Male</option><option value="Female">Female</option><option value="Transgender">Transgender</option></select></td>
                    </tr>
                    <tr>
                        <td><strong>Citizenship of India By*</strong></td>
                        <td><select name="citizen" value="<?php echo $citizen; ?>" ><option value="" selected></option><option value="Birth">Birth</option><option value="Descent">Descent</option><option value="Registration/Naturalisation">Registration/Naturalisation</option></select></td>
                    </tr>
                    <tr>
                        <td><strong>Education Qualification*</strong></td>
                        <td><select name="quali" value="<?php echo $quali; ?>" ><option value="" selected></option><option value="7th Pass or less">7th Pass or less</option><option value="10th Pass and above">10th Pass and above</option><option value="Graduate and above">Graduate and above</option></select></td>
                    </tr>
                    <tr>
                        <td><strong>Aadhar Number*</strong></td>
                        <td><input name="a_num" value="<?php echo $a_num; ?>" type="text" required="" minlength="12" maxlength="16"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><strong>Pan Number*</strong></td>
                        <td><input name="pan" value="<?php echo $pan; ?>" type="text" required="" minlength="10"></td>
                    </tr>
                    <tr>
                        <td><strong>Address*</strong></td>
                        <td><textarea name="address" value="<?php echo $address; ?>" required="" style="width: 250px;"></textarea></td>
                    </tr>
                    <tr>
                        <td><strong>Contact Number*</strong></td>
                        <td><input name="contact" value="<?php echo $contact; ?>" type="text" required="" minlength="10"></td>
                    </tr>
                    <tr>
                        <td><strong>Upload Photo*</strong></td>
                        <td><input type="file" name="uploadfile" value="" required/></td>
                    </tr>
                    <tr>
                    <td><input type="submit" style="width: 150px" name="submit3" value="Upload File"/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</form>
</html>
