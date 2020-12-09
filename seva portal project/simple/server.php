<?php
$name = "";
$cvv = "";
$cno = "";
$amount = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'seva_portal');
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['owner']);
    $cvv = mysqli_real_escape_string($db, $_POST['cvv']);
    $cno = mysqli_real_escape_string($db, $_POST['cardNumber']);
    $amount = mysqli_real_escape_string($db, $_POST['amount']);
    $query = "SELECT * FROM account WHERE name='$name' AND cno='$cno'";  
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0 ){
        $name == $row['name'];
        $cvv == $row['cvv'];
        $cno == $row['cno'];
        header('location:success.php');
    }
    else{
        array_push($errors, "Please Check your details");
    }
}
?>