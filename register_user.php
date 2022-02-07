<?php


$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$_POST['name'];
$_POST['last_name'];
$_POST['address'];
$_POST['phone'];
$_POST['email'];
$_POST['comments'];
$_POST['register_date'];
$_POST['active'];


$sql = "INSERT INTO customer (name, last_name, address, phone, email, comments, register_date, active) VALUES ('".$_POST['name']."', '".$_POST['last_name']."','".$_POST['address']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['comments']."', '".$_POST['register_date']."', '".$_POST['active']."')";

mysqli_query($con, $sql);
header('Location: home_a.php');
?>