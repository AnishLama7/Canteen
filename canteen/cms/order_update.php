<?php 

	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	

	if(!empty($_POST)){
    $can_order = $_POST;
    extract($_POST);

  	$now = date('Y-m-d H:i:s');

    $qry = "UPDATE can_order SET updated_at = '{$now}', notify = '1' WHERE order_no = '{$can_order['order_no']}";

    $result = db_query($con, $qry);

    var_dump($qry); 
    

    if($result) {
			$_SESSION['message'] = [
				'content' => 'Notification send.',
				'type' => 'success'
			];

			redirect(url('cms/can_order.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while sending notification.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('cms/can_order.php'));
			die;
		}

	}
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('cms/can_order.php'));
	}

 ?>  
