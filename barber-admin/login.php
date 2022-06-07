<?php
	session_start();

	// IF THE USER HAS ALREADY LOGGED IN
	if(isset($_SESSION['admin_username']) && isset($_SESSION['admin_password']))
	{
		header('Location: index.php');
		exit();
	}
	// ELSE
	$pageTitle = 'Barber Admin Login';
	include 'db_con.php';
	include 'Includes/functions/functions.php';
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin Login</title>
		<!-- FONTS FILE -->
		<link href="Design/fonts/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Nunito FONT FAMILY FILE -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- CSS FILES -->
		<link href="Design/css/sb-admin-2.min.css" rel="stylesheet">
		<link href="Design/css/main.css" rel="stylesheet">
	</head>
	<body>
		<div class="login">
			<form class="login-container validate-form" name="login-form" method="POST" action="login.php" onsubmit="return validateLogInForm()">
				<span class="login100-form-title p-b-32">
					Barber Admin Login
				</span>

				<!-- PHP SCRIPT WHEN SUBMIT -->

				<?php

					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin-button']))
					{
						$username = test_input($_POST['admin_username']);
						$password = test_input($_POST['admin_password']);
						$hashedPass = sha1($password);

						//Check if User Exist In database
						// $stmt = mysqli_prepare($mysqli, "SELECT * FROM admin WHERE admin_username=? and admin_password=?");
						// mysqli_stmt_bind_param($stmt, $hashedPass, $username);
						// mysqli_stmt_execute($stmt);
						// $result = mysqli_stmt_get_result($stmt);
						// $row = mysqli_fetch_row($result);

						// $stmt = $con->prepare("SELECT * from admin where admin_username ='$username' and admin_password = '$password'");
						// $stmt->execute(array($username,$hashedPass));
						// $row = $stmt->fetch();
						// $count = $stmt->rowCount();

						// $query = "SELECT Name, CountryCode, District FROM myCity";
						// $result = $mysqli->query($query);

						// Check if count > 0 which mean that the database contain a record about this username

						if($row > 0)
						{

							$_SESSION['admin_username'] = $username;
							$_SESSION['admin_password'] = $password;
							$_SESSION['admin_id'] = $row['admin_id'];
							header('Location: index.php');
							die();
						}
						else
						{
							?>

							<div class="alert alert-danger">
								<button data-dismiss="alert" class="close close-sm" type="button">
									<span aria-hidden="true">×</span>
								</button>
								<div class="messages">
									<div>Username and/or password are incorrect!</div>
								</div>
							</div>

							<?php
						}
					}

				?>

				<!-- USERNAME INPUT -->

				<div class="form-input">
					<span class="txt1">Username</span>
					<input type="text" name="admin_username" class = "form-control" oninput = "getElementById('required_username').style.display = 'none'" autocomplete="off">
					<span class="invalid-feedback" id="required_username">Username is required!</span>
				</div>
				
				<!-- PASSWORD INPUT -->

				<div class="form-input">
					<span class="txt1">Password</span>
					<input type="password" name="admin_password" class="form-control" oninput = "getElementById('required_password').style.display = 'none'" autocomplete="new-password">
					<span class="invalid-feedback" id="required_password">Password is required!</span>
				</div>
				
				<!-- SIGN IN BUTTON -->

				<p>
					<button type="submit" name="signin-button" >Sign In</button>
				</p>

				<!-- FORGOT YOUR PASSWORD LINK -->

				<span class="forgotPW">Forgot your password ? <a href="#">Reset it here.</a></span>
			</form>
		</div>
		
		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
		  		<div class="copyright text-center my-auto">
					<span>Copyright &copy; Barbershop Website by Twin & Dad Barbershop</span>
		  		</div>
			</div>
	  	</footer>
		<!-- End of Footer -->

		<!-- INCLUDE JS SCRIPTS -->
		<script src="Design/js/jquery.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="Design/js/bootstrap.bundle.min.js"></script>
		<script src="Design/js/sb-admin-2.min.js"></script>
		<script src="Design/js/main.js"></script>
	</body>
</html>