<?php 

	require_once 'includes/init.php';
	require_once 'includes/db_connection.php';
	require_once 'includes/user_check.php';

	
	if(!empty($_POST)){
		extract($_POST);


$sql = "SELECT * FROM users where user_id = '{$user_id}'";

$result = db_query($con, $sql);

$user = (db_fetch_assoc($result));



?>




