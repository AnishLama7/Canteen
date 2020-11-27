<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';


	if(!empty($_POST)){
		extract($_POST);

		$password1 = sha1($password1);

		$sql = "INSERT INTO users SET name = '{$name}', sex= '{$sex}', faculty = '{$faculty}', phone = '{$phone}', password = '{$password1}', username = '{$username}', email = '{$email}', type = '{$type}' ";


		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'users added successfully.',
				'type' => 'success'
			];

			redirect(url('cms/login.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while adding users.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('signup.php'));
			die;
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('signup.php'));
	}
 