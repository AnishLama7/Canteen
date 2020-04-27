<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('location:home.php');
}
else{
	echo 'welcome '. $_SESSION['user'];	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSIDE HOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'link.php'?>
</head>
<body>
	<?php require 'templates/nav.php'; ?>

</body>
</html>