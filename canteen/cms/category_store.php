<?php 

	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/db_connection.php';


	if(!empty($_POST)){
		extract($_POST);

		$sql = "INSERT INTO categories SET name = '{$name}', slug = '{$slug}' ";

		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'Category added successfully.',
				'type' => 'success'
			];

			redirect(url('cms/category.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while adding Category.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('cms/category_add.php'));
			die;
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('cms/category_add.php'));
	}
 