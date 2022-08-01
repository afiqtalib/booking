<!DOCTYPE html>
<html>
<head>
	<title>LOGIN | Twin & Dad Barbershop</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
     <form action="login-action.php" method="post">
		 <img src="design/logo-company.jpg" alt="company-logo">
     	<h2>CUSTOMER LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Don't have an account ?</a>
		  <br>
		  <a href="barber/login.php" class="ca">Barber</a>
		  <br>
		  <a href="barber-admin/login.php" class="ca">Admin</a>
     </form>
</body>
</html>