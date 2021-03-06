<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';


	if(!empty($_POST)){
		extract($_POST);

		$password = sha1($password);

		$sql = "SELECT * FROM users WHERE (username = '{$username}' OR email = '{$username}') AND password = '{$password}' ";

		$result = db_query($con, $sql);

		if($result && db_num_rows($result) > 0) {
			$user = db_fetch_assoc($result);

			$_SESSION['user'] = $user;
			

			if($_SESSION['user']['type'] == 'student' || 'staff' || 'guest' and $_SESSION['user']['request'] == 'accepted'){
				redirect(url('std_order.php'));
			}

			else if ($_SESSION['user']['type'] == 'canteen'){
				redirect(url('cms'));
			}

			else{
				$_SESSION['message'] = [
				'content' => 'User not verified or user not found.',
				'type' =>'danger'
			];
				redirect(url('cms/login.php'));
				}

		}

		else {
			$_SESSION['message'] = [
				'content' => 'Invalid Username or Password.',
				'type' =>'danger'
			];

			redirect(url('cms/login.php'));
			
		}

	}
	else{
		$_SESSION['message'] = [
			'content' => 'Invalid action.',
			'type' => 'danger'
		];

			redirect(url('cms/login.php'));
		
	}
 