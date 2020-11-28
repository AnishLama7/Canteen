<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';


	if(!empty($_POST)){
		extract($_POST);

		$now = date('Y-m-d H:i:s');

		$sql = "UPDATE users SET  name = '{$name}', phone = '{$phone}', username = '{$username}', email = '{$email}', type = '{$type}', request = '{$request}' WHERE username = '$username' ";

		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'User accepted.',
				'type' => 'success'
			];

			redirect(url('cms/users.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while updating users.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('cms/user_edit.php?username='.$username));
			die;
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('cms/users.php'));
	}
 