<?php
  if (isset($_POST['submit'])){
  session_destroy();
  header('location:home.php');
}
?>