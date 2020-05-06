<?php 

	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/db_connection.php';

	if(isset($_GET['slug']) && !empty($_GET['slug'])) {
		$slug = $_GET['slug'];

		$sql = "DELETE FROM categories WHERE slug = '{$slug}' ";
		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
			'content' => 'Category deleted successfully',
			'type' => 'success'
		];

		redirect(url('cms/category.php'));

		}
		else {
			$_SESSION['message'] = [
			'content' => 'Error while deleting category',
			'type' => 'danger'
		];

		redirect(url('cms/category.php'));
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'Invalid Action',
			'type' => 'danger'
		];

		redirect(url('cms/category.php'));
	}