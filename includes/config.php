<?php
	$host = "mysql.cba.pl";
	$user = "carrental1";
	$pass = "carrental";
	$db = "carrental1";

	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
