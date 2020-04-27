<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';

	if(!empty($_POST)) {
		extract($_POST);

		$sql = "INSERT INTO menu SET name ='{$name}', slug = '{$slug}', price = '{price}', type = '{$type}', total = '{$total}' " ;

		if(isset($_FILES['image']) && !empty($_FILES['image']) && $_FILES['image']['error'] == 0) {
			$file = $_FILES['image'];

			$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
			$filename = 'food_'.date('smHYid').'_'.rand(1000, 9999).'.'.$ext;

			move_uploaded_file($file['tmp_name'], '../images/'.$filename);

			$sql .=", image = '{$filename}'";

			var_dump($sql);
		}

		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'Menu added successfully.',
				'type' => 'success'
			];

			redirect(url('cms/menu.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while adding Menu.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('cms/menu_add.php'));
			die;
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('cms/menu_add.php'));
	}
 