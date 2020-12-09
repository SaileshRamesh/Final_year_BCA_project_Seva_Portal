<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <form action="" method="post" id="proceed"></form>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h1 class="text-center" style="margin-top: 25px;">Proceed To Payment/Cancel the Passport</h1>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
$connect = mysqli_connect("localhost", "root", "", "seva_portal");  
$query = "Select status FROM passport WHERE email='{$_SESSION[ "email" ]}'";  
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
if (($row['status']) == "not approved") {
    echo "<button class='btn btn-primary' input type='submit' id='submit7' name='submit7' style='width: 350px;margin-left: 510px;margin-top: 110px;'>Cancel Passport</button>";
}
else {
    echo "<button class='btn btn-primary' input type='submit6' id='submit6' name='submit6' style='width: 350px;margin-left: 510px;margin-top: 150px;'>Payment</button>";
}
?>
<script>
document.getElementById("submit7").onclick = function () {
    location.href = "delete.php";
};
</script>

<script>
document.getElementById("submit6").onclick = function () {
    location.href = "index5.php";
};
</script>
