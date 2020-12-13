<?php 

	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/db_connection.php';
	

	 if(!empty($_POST)){
    $can_order = $_POST;
    extract($_POST);

  $now = date('Y-m-d H:i:s');

     
    $qry = "UPDATE can_order set updated_at = '{$now}', notify = '1' WHERE order_no = '{$can_order['order_no']}";

     $result = db_query($con, $qry);

     


}
 ?>  
