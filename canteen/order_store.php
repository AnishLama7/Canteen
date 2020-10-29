<?php 

	require_once 'includes/init.php';
	require_once 'includes/user_check.php';
	require_once 'includes/db_connection.php';


	if(!empty($_POST)){
		extract($_POST);
		

		$now = date('Y-m-d H:i:s');
		$user_id = $_SESSION['user']['id'];

        $sql = " INSERT INTO orders SET user_id = '{$user_id}', order_no = '{$order_no}', quantity = '{$quantity}', created_at = '{$now}', ";
        

         if( $menu_id == $order['id']){
         	$sql .= "menu_id = '{$order['id']}'";
         }
         else {
         	return;
         }

         $result = db_query($con, $sql);
		
       
       

		if($result) {
			$_SESSION['message'] = [
				'content' => 'Order added successfully.',
				'type' => 'success'
			];

			redirect(url('cms/order.php'));
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
 