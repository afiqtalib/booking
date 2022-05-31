<?php 
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['uname'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="Lstyle.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['uname']; ?></h1>
    <a href="logout.php">Logout</a>
    <h1>hello gaiss </h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>