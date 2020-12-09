<?php
include_once("dbconfig.php");
if($_REQUEST['email']) {
$sql = "SELECT r.passportoffice,r.name,r.surname,r.dob,r.email,p.apply,p.gender,p.citizen,p.quali,p.a_num,p.pan,p.address,p.contact,p.a_copy FROM registration r, passport p WHERE email='".$_REQUEST['email']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$data = $rows;
}
echo json_encode($data);
}
?>