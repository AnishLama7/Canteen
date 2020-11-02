<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';


	if(isset($_GET['slug']) && !empty($_GET['slug'])) {
		$slug = $_GET['slug'];

		
		$sql = "DELETE FROM order WHERE slug = '{$slug}' ";
		$result = db_query($con, $sql);

		var_dump($result);
		die;

		if($result) {
			$_SESSION['message'] = [
			'content' => 'Order deleted successfully',
			'type' => 'success'
		];

		redirect(url('cms/order.php'));

		}
		else {
			$_SESSION['message'] = [
			'content' => 'Error while deleting order',
			'type' => 'danger'
		];

		redirect(url('cms/order.php'));
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'Invalid Action',
			'type' => 'danger'
		];

		redirect(url('cms/order.php'));
	}