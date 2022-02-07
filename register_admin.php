<?php


$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$name_a = $_POST['name_a'];
$last_name_a = $_POST['last_name_a'];
$address_a = $_POST['address_a'];
$phone_a = $_POST['phone_a'];
$email_a = $_POST['email_a'];
$register_date_a = $_POST['register_date_a'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO admin (name_a, last_name_a, address_a, phone_a, email_a, register_date_a, username, password) VALUES ('".$name_a."', '".$last_name_a."','".$address_a."', '".$phone_a."', '".$email_a."', '".$register_date_a."', '".$username."', '".$password."')";

mysqli_query($con, $sql);
header('Location: home_a.php');
?>