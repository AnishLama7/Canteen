<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	
	if(!empty($_POST)) {
		extract($_POST);

		$now = date('Y-m-d H:i:s');
		$user_id = $_SESSION['user']['id'];
		$sql = "INSERT INTO menu SET user_id= '{$user_id}', menu_id = '{$menu_id}', order_no = '{$order_no}, total = '{$total}', time ='{$now}'";
		

		// if(isset($_FILES['image']) && !empty($_FILES['image']) && $_FILES['image']['error'] == 0) {
		// 	$file = $_FILES['image'];

		// 	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		// 	$filename = 'food_'.date('smHYid').'_'.rand(1000, 9999).'.'.$ext;

		// 	move_uploaded_file($file['tmp_name'], '../images/'.$filename);

		// 	$sql .=", image = '{$filename}'";

		// }

		// $result = db_query($con, $sql);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'Order added successfully.',
				'type' => 'success'
			];

			redirect(url('order.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while adding order.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('order.php'));
			die;
		}

	}
	// else {
	// 	$_SESSION['message'] = [
	// 		'content' => 'invalid action.',
	// 		'type' => 'danger'
	// 	];

	// 	redirect(url('cms/menu_add.php'));
	// }
 