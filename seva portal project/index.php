<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg1'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style>
	.button {
    background-color: #4CAF50;
	/* Green */
	width: 400px;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
	background-color: white;
	margin-top: 20px;
    color: black;
    border: 2px solid #008CBA;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
}

.button2 {
	background-color: white;
	margin-top: 20px;
    color: black;
    border: 2px solid #008CBA;
}
.button2:hover {
  background-color: #008CBA;
  color: white;
}
</style>

<div class="header">
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?>!</strong></p>
    	<!--<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>-->
	<?php endif ?>
	<button class="button button1" input type="button" onclick="location='passportform.php'" >Apply for Passport</button>
</div>
		
</body>
</html>