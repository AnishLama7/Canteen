<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';


	if(isset($_GET['slug']) && !empty($_GET['slug'])) {
		$slug = $_GET['slug'];

		$sql = "SELECT image FROM menu WHERE slug = '{$slug}'";
		$result = db_query($con, $sql);
		if($result && db_num_rows($result) > 0) {
			$menu = db_fetch_assoc($result);

			if(!empty($menu['image'])) {
				@unlink('../images/'.$menu['image']);
			}
		}

		$sql = "DELETE FROM menu WHERE slug = '{$slug}' ";
		$result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
			'content' => 'Menu deleted successfully',
			'type' => 'success'
		];

		redirect(url('cms/menu.php'));

		}
		else {
			$_SESSION['message'] = [
			'content' => 'Error while deleting menu',
			'type' => 'danger'
		];

		redirect(url('cms/menu.php'));
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'Invalid Action',
			'type' => 'danger'
		];

		redirect(url('cms/menu.php'));
	}