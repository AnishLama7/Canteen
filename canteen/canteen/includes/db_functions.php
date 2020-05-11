<?php 

	if(!function_exists('db_connect')) {

		 function db_connect($host, $name, $user, $pass = '') {
		 	$con = mysqli_connect($host, $user, $pass, $name);

		 	if($con->connect_error) {
		 		die('database conn error');
		 	}
		 	else{
		 		return $con;
		 	}

		 }
	}


	if(!function_exists('db_query')) {

		function db_query($con, $sql) {
			return mysqli_query($con, $sql);
		}
	}


	if(!function_exists('db_num_rows')) {

		function db_num_rows($result) {
			return mysqli_num_rows($result);

	}
		}


	if(!function_exists('db_fetch_assoc')) {

		function db_fetch_assoc($result) {
			return mysqli_fetch_assoc($result);

		}
	}


	if(!function_exists('db_error')) {

		function db_error($con) {
			return mysqli_error($con);
		}
	}


	if(!function_exists('db_insert_id')) {
		
		function db_insert_id() {
			return mysqli_insert_id($con);
		}
	}


