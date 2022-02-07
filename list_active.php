

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="assets/css/login_style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		

	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
			<h1><a href="home_a.php">Back to OMS Dashboard</a></h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		
		<div class="content">
			<h2>Active Clients</h2>
			<br>
			<br>
			<br>
			<br>
            
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
$sql = "SELECT * FROM customer WHERE active='1'";
$result = mysqli_query($con, $sql);

echo "<table border='3'>
<tr>
<th>Customer ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>Comments</th>
<th>Register Date</th>
</tr>";


while($row = mysqli_fetch_array($result))
{?>

<tr>
<td><?php echo $row["customer_id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["comments"]; ?></td>
<td><?php echo $row["register_date"]; ?></td>
<td>

<form method="post" action="edit.php">
        <input type="hidden" name="customer_id" value="<?php echo $row['customer_id']; ?>"/>
        <input type="submit" value="Edit"/>
	</form>
    <form method="post" action="make_inactive.php">
        <input type="hidden" name="customer_id" value="<?php echo $row['customer_id']; ?>"/>
        <input type="submit" value="Inactive"/>
	</form>

	<form method="post" action="delete.php">
        <input type="hidden" name="customer_id" value="<?php echo $row['customer_id']; ?>"/>
        <input type="submit" value="Delete"/>
    </form>
</td>



<?php
echo "</tr>";
}
?>
<?php
echo "</table>";
?>
				
			</div>
		</div> 
	</body>
	</html>
	
