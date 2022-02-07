<?php


$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$id = $_POST['cid'];
$name =$_POST['name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$register_date = $_POST['register_date'];
if(!empty($name)){
    $update_fields[] = "name='$name'";
   }
   if(!empty($last_name)){
    $update_fields[] = "last_name='$last_name'";
   }
   if(!empty($address)){
    $update_fields[] = "address='$address'";
   }
   if(!empty($phone)){
    $update_fields[] = "phone='$phone'";
   }
   if(!empty($email)){
    $update_fields[] = "email='$email'";
   }
   if(!empty($comments)){
    $update_fields[] = "comments='$comments'";
   }
   if(!empty($register_date)){
    $update_fields[] = "register_date='$register_date'";
   }
   if(count($update_fields) > 0){
    $nonempty_fields = implode(", ", $update_fields);
    $sql ="
    UPDATE customer 
    SET $nonempty_fields
    WHERE customer_id='$id'
    ";
  }



mysqli_query($con, $sql);
header('Location: home_a.php');
