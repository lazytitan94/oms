<?php


$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'oms';
// Connect to the database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$id = $_POST['customer_id'];

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
				<h1><a href="home_a.php">Back to OMS - Dashboard</a></h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>OMS Dashboard</h2>
            <br><br>
            <?php echo"<h4>Edit Client with ID Number $id.</h4>"?>
			<br>
			Enter any detail you want to change then click Update
            <form action="edit_update.php" method="POST">
                <button style="margin-left: 920px; margin-bottom: 5px;" type="submit" class="btn btn-danger">Update</button>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" name="name" class="form-control">
              </div>

			  <input type="hidden" name="cid" 
					value="<?php echo $_POST['customer_id'];?>"/>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Last Name</span>
                <input type="text" name="last_name" class="form-control">
              </div>
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Address</span>
                <input type="text" name="address" class="form-control">
              </div>
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Phone Number</span>
                <input type="text" name="phone" class="form-control">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" name="email" class="form-control">
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Comments</span>
                <input type="text" name="comments" class="form-control">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Register Date</span>
                <input type="text" name="register_date" placeholder="YYYY-MM-DD" class="form-control">
            
				
				
            </form>
        </div>
	</body>
</html>