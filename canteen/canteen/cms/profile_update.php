<?php 

	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/db_connection.php';


	if(!empty($_POST)){
		extract($_POST);

		$sql = "UPDATE users SET name = '{$name}' ";

		if(isset($old_password) && !empty($old_password) && isset($new_password) && !empty($new_password)) {
			$old_password = sha1($old_password);

			$qry = "SELECT id FROM users WHERE password = '{$old_password}' AND username = '{$username}'";
			$res = db_query($con, $qry);

			if($res && db_num_rows($res) > 0) {
				$new_password = sha1($new_password);

				$sql .= ",password = '{$new_password}'";

			}
		
			else {
				$_SESSION['message'] = [
				'content' => 'invalid old password.',
				'type' => 'danger'
			];

			redirect(url('cms/profile_edit.php'));
			die;
			}

		}

		$sql .= " WHERE username = '{$username}'";

		$result = db_query($con, $sql);

		if($result) {
			$sql = "SELECT * FROM users WHERE username = '{$username}'";
			$result = db_query($con, $sql);
			$user = db_fetch_assoc($result);

			$_SESSION['user'] = $user;

			$_SESSION['message'] = [
				'content' => 'profile updated successfully.',
				'type' => 'success'
			];

			redirect(url('cms/profile_edit.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while updating profile.',
				'type' => 'danger'
			];

			redirect(url('cms/profile_edit.php'));
			die;
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('cms/profile_edit.php'));
	}
 