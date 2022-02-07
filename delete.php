<?php


$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$id = $_POST['customer_id'];

$sql = "DELETE FROM customer WHERE customer_id='$id'";

mysqli_query($con, $sql);
header('Location: home_a.php');
