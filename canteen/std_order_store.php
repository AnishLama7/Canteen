<?php 

	require_once 'includes/init.php';
	require_once 'includes/user_check.php';
	require_once 'includes/student_check.php';
	require_once 'includes/db_connection.php';


	if(!empty($_POST)){
		$menu = $_POST;
		extract($_POST);


		$now = date('Y-m-d H:i:s');
		$user_id = $_SESSION['user']['id'];

        $sql = " INSERT INTO orders SET order_name = '{$menu['name']}', user_id = '{$user_id}', order_no = '{$menu['order_no']}', quantity = '{$menu['quantity']}', created_at = '{$now}', menu_id='{$menu['order_id']}'";

         $result = db_query($con, $sql);

         
      

		if($result) {
			$_SESSION['message'] = [
				'content' => 'Order added successfully.',
				'type' => 'success'
			];

			redirect(url('order.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while adding Order.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('order.php'));
			die;
		}
	}

	
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('order.php'));
	}
 