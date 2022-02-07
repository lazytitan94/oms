

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="assets/css/login_style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		

	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
			<h1><a href="home_a.php">Back to OMS Dashboard</a></h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<?php

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
$result = mysqli_query($con,"SELECT * FROM admin");

echo "<table border='3'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Email</th>
<th>Register Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name_a'] . "</td>";
echo "<td>" . $row['last_name_a'] . "</td>";
echo "<td>" . $row['address_a'] . "</td>";
echo "<td>" . $row['email_a'] . "</td>";
echo "<td>" . $row['register_date_a'] . "</td>";

echo "</tr>";
}
echo "</table>";
?>
				
			</div>
		</div> 
	</body>
	</html>
	
