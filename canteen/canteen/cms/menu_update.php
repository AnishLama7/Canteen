<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';


	if(!empty($_POST)) {
		extract($_POST);

		$now = date('Y-m-d H:i:s');

		$sql = "UPDATE menu SET name = '{$name}', slug = '{$slug}', price = '{$price}',type = '{$type}', total = '{$total}', updated_at = '{$now}' ";

		if(isset($_FILES['image']) && !empty($_FILES['image']) && $_FILES['image']['error'] == 0) {
			$file = $_FILES['image'];

			$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
			$filename = 'menu_'.date('smHYid').'_'.rand(1000, 9999).'.'.$ext;

			move_uploaded_file($file['tmp_name'], '../images/'.$filename);

			$sql .=", image = '{$filename}'";

			

			if(!empty($old_image)){
				@unlink('../images/'.$old_image);
			}
		}

		$sql .= " WHERE id = '{$id}'";

		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'menu edited successfully.',
				'type' => 'success'
			];

			redirect(url('cms/menu.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while editing menu.'.db_error($con),
				'type' => 'danger'
			];

			redirect($_SERVER['HTTP_REFERER']);
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('cms/menu.php'));
	}
 