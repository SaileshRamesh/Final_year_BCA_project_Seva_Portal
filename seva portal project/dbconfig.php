<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seva_portal";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s", mysqli_connect_error());
exit();
}
?>