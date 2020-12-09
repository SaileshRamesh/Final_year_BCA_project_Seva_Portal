//test file
<html>
<body>
<form action="" method="POST">


<h3>email</h3><input type="text" name="email" id="email">
<h3>password</h3><input type="text" name="password" id="password">
<input type="submit" name="submit">
</form>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'seva_portal');
if(isset($_POST['submit']))
{
    
    $a=$_POST['email'];
    $b=$_POST['password'];
    $query=mysqli_query($connection,"insert into myguests values('$a','$b')");
    if($query){
        echo 'user created successfully';
    }
    else{
        echo 'unsucessful';
    }
}
?>
</body>
</html>
