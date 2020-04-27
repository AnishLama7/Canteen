<?php  

	require_once 'db_functions.php';

	$con = db_connect(config('db_host'), config('db_name'), config('db_user'), config('db_pass'));