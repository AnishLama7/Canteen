<?php 

	require_once 'includes/init.php';
	require_once 'includes/user_check.php';
	require_once 'includes/student_check.php';
	require_once 'includes/db_connection.php';


	if(!empty($_POST)){
		$menu = $_POST;
		extract($_POST);


$sql = "SELECT * FROM menu where id = {$menu['order_id']}";

$result = db_query($con, $sql);

$data = (db_fetch_assoc($result));

if (isset($data)>=1) {
	 	$previousCount =($data['total']);
		$newCount = $data['total'] - $menu['quantity'];
		$query = "UPDATE menu set total={$newCount} where id = {$menu['order_id']}";
		db_query($con,$query);

}


		$now = date('Y-m-d H-i-s A');
		$user_id = $_SESSION['user']['id'];

        $sql1 = " INSERT INTO std_order SET order_name = '{$menu['name']}', food_image = '{$menu['image']}', order_price = '{$menu['price']}',  user_id = '{$user_id}', order_no = '{$menu['order_no']}',total_order = '{$menu['total']}', quantity = '{$menu['quantity']}', created_at = '{$now}',break_time = '{$break_time}', menu_id='{$menu['order_id']}'";
        $result = db_query($con, $sql1);
        var_dump($sql1); die;


         $sql2 = " INSERT INTO can_order SET order_name = '{$menu['name']}', order_price = '{$menu['price']}',  user_id = '{$user_id}', order_no = '{$menu['order_no']}', quantity = '{$menu['quantity']}',created_at = '{$now}',break_time = '{$break_time}', menu_id='{$menu['order_id']}'";

        $result = db_query($con, $sql2);

		if($result) {
			$_SESSION['message'] = [
				'content' => 'Order added successfully.',
				'type' => 'success'
			];

			redirect(url('std_order.php'));
		}
		else {
			$_SESSION['message'] = [
				'content' => 'problem while adding Order.'.db_error($con),
				'type' => 'danger'
			];

			redirect(url('std_order.php'));
			die;
		}
	}

	
	else {
		$_SESSION['message'] = [
			'content' => 'invalid action.',
			'type' => 'danger'
		];

		redirect(url('std_order.php'));
	}
 