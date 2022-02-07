<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>OMS Profile</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link href="assets/css/login_style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1><a href="index_logged.html">Back to OMS</a></h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>OMS Dashboard</h2>
		<?php echo	"Welcome, ". $_SESSION['loggedin'] ?>
		<br><br>
		<a href="register_user.html">
   			 <button class="btn btn-outline-danger">Register a client.</button>
 		 </a>
		  <a href="list_active.php">
   			 <button class="btn btn-outline-danger">List all active clients.</button>
 		 </a>
		  <a href="list_inactive.php">
   			 <button class="btn btn-outline-danger">List all inactive clients.</button>
 		 </a>
		  <a href="search.html">
   			 <button class="btn btn-outline-danger">Search for a client.</button>
 		 </a>
				
		<a href="register_admin.html">
   			 <button class="btn btn-outline-danger">Register a new admin.</button>
 		 </a> 
		
		</div>
	</body>
</html>