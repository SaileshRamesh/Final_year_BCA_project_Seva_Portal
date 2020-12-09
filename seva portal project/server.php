<?php
session_start();

// initializing variables
$location = "";
$name = "";
$surname = "";
$dob = "";
$email    = "";
$password = "";
$hintquestion="";
$hintans = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'seva_portal');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $dob = new DateTime($_POST['dob']);
  $dob = mysqli_real_escape_string($db, $dob->format('Y-m-d'));
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_repeat = mysqli_real_escape_string($db, $_POST['password_repeat']);
  $hintquestion = mysqli_real_escape_string($db, $_POST['hintquestion']);
  $hintans = mysqli_real_escape_string($db, $_POST['hintans']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($location)) { array_push($errors, "Please enter the passport office location"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($hintquestion)) { array_push($errors, "Please select the question"); }
  if (empty($hintans)) { array_push($errors, "Please answer the question"); }
  if ($password != $password_repeat) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if email exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database
    if (count($_POST) > 0) {
      if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
  	$query = "INSERT INTO registration (passportoffice, name, surname, dob, email, password, hintquestion, hintanswer) VALUES('$location','$name','$surname','$dob','$email', '$password','$hintquestion','$hintans')";
  	mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['location']=$location;
    $_SESSION['name']=$name;
    $_SESSION['surname']=$surname;
    $_SESSION['dob']=$dob;
  	$_SESSION['success'] = "You are now logged in";
    header('location: index.php');
      }
      else{
        array_push($errors,"captcha doesn't match");
      }
  }
}
}
if (isset($_POST['submit1'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}
if (isset($_POST['submit3'])) {

  $apply = mysqli_real_escape_string($db, $_POST['apply']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $citizen = mysqli_real_escape_string($db, $_POST['citizen']);
  $quali = mysqli_real_escape_string($db, $_POST['quali']);
  $a_num = mysqli_real_escape_string($db, $_POST['a_num']);
  $pan = mysqli_real_escape_string($db, $_POST['pan']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="document/".$filename;
  move_uploaded_file($tempname,$folder);
  $user_check_query = "SELECT * FROM passport WHERE a_num='$a_num' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  $user_check_query = "SELECT * FROM passport WHERE pan='$pan' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user1 = mysqli_fetch_assoc($result);
  $user_check_query = "SELECT * FROM passport WHERE contact='$contact' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user2 = mysqli_fetch_assoc($result);
  if ($user) { // if email exists

    if ($user['a_num'] === $a_num) {
      array_push($errors, "Aadhar number already exists");
    }
  }
  if ($user1) { // if email exists

    if ($user1['pan'] === $pan) {
      array_push($errors, "Pan Card number already exists");
    }
  }
  if ($user1) { // if email exists

    if ($user1['contact'] === $contact) {
      array_push($errors, "Contact number already exists");
    }
  }
  if($apply != "" && $gender != "" && $citizen != "" && $quali != "" && $a_num != "" && $pan != "" && $address != "" && $contact != "" && $filename != "" ){
    $query = "INSERT INTO passport(name, surname,location, dob, email, apply, gender, citizen, quali, a_num, pan, address, contact, a_copy, status) VALUES('".$_SESSION['name']."','".$_SESSION['surname']."','".$_SESSION['location']."','".$_SESSION['dob']."','".$_SESSION['email']."','$apply','$gender','$citizen','$quali', '$a_num','$pan','$address','$contact','$folder','not approved')";
    $data = mysqli_query($db, $query);
    if($data){
    echo "data inserted successfully";
    header('location: proceed.php');
    }
  }
  if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    echo"Error";
  }
}  	
if (isset($_POST['submit4'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_repeat= mysqli_real_escape_string($db, $_POST['password_repeat']);
  if (empty($name)) { array_push($errors, "Please enter the name"); }
  if (empty($email)) { array_push($errors, "Please enter the email"); }
  if (empty($password)) { array_push($errors, "Please enter the password"); }
  if (empty($password_repeat)) { array_push($errors, "Please enter the repeat password"); }
  if ($password != $password_repeat) {
    array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM adminreg WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if email exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
    if (count($_POST) > 0) {
    $password = md5($password);
    $query = "INSERT INTO adminreg (name, email, password) VALUES('$name','$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['good'] = "You are now logged in";
    echo "You are registered succesfully";
    header('location: adminhome.php');
      }
    }
      else{
        array_push($errors,"Not able to register");
      }
  }
if (isset($_POST['submit5'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
    $query = "SELECT * FROM adminreg WHERE email='$email' AND password='$password'";
    $_SESSION['admin']=$email;
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['success'] = "You are now logged in";
      $email=$_SESSION['admin'];
  	  header('location: adminhome.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}
if (isset($_POST['submit7'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $cvv = mysqli_real_escape_string($db, $_POST['cvv']);
  $cno = mysqli_real_escape_string($db, $_POST['cno']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $edate = new DateTime($_POST['edate']);
  $edate = mysqli_real_escape_string($db, $edate->format('Y-m-d'));
  $query = "SELECT * FROM account WHERE name='$name' AND cno='$cno' AND cvv='$cvv';";
  $tid = md5(rand());
  $query .= "INSERT INTO payment(tid,name,amount) VALUES ('$tid','$name','$amount');";
  $query .="UPDATE account SET balance=balance-1200 WHERE name='$name'";
  if (mysqli_multi_query($db, $query)) {
  	  header('location: success.php');
  	}else {
  		echo "Please check your details";
  	}
}
?>