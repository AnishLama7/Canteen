<?php 

	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/db_connection.php';

	if(isset($_GET['username']) && !empty($_GET['username'])) {
		$username = $_GET['username'];

		$sql = "DELETE FROM users WHERE username = '{$username}' ";
		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
			'content' => 'User deleted successfully',
			'type' => 'success'
		];

		redirect(url('cms/users.php'));

		}
		else {
			$_SESSION['message'] = [
			'content' => 'Error while deleting user',
			'type' => 'danger'
		];

		redirect(url('cms/users.php'));
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'Invalid Action',
			'type' => 'danger'
		];

		redirect(url('cms/users.php'));
	}