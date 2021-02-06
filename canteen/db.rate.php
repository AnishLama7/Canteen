<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpass = "";
	$dbname = "canteen1";
	$conn = mysqli_connect($servername, $dbusername, $dbpass, $dbname);
	

	if(!$conn) {
		die("connection to the database Failed: " .mysqli_connect_error());
	}
?>