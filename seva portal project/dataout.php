<HTML>
<head>
</head>
<body>
<?php
session_start();
$db = mysqli_connect("localhost", "root","");
mysqli_select_db($db,"seva_portal");
mysqli_query($db, "DELETE FROM passport WHERE email='".$_SESSION["email"]."'");
echo "Information Deleted";
?>
</body>
</HTML>