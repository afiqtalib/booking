<?php

$servername= "localhost";
$usname= "root";
$password = "";
$db_name = "bbs_db";



//create connection
$conn = mysqli_connect($servername, $usname, $password, $db_name);

//check connection 
if (!$conn) {
	echo "Connection failed!";
}
