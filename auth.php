<?php
session_start();

$db_host = 'localhost'; 
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con,"select * from admin where username='$username' and password='$password'");
$result1 = mysqli_fetch_array($result);

if($result1){
    header('Location: index_logged.html');
    $_SESSION['loggedin'] = $username;
}


else{

        
    header("Location: login_after_error.html");
    die("Unable to connect to given site.");
}


?>