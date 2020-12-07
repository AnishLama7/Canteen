<?php 

	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/db_connection.php';
	

	 if(!empty($_POST)){
    $can_order = $_POST;
    extract($_POST);

  $now = date('Y-m-d H:i:s');

  if (isset($can_order['notify']) == 0) {
    
    $qry = "UPDATE can_order set updated_at = '{$now}', notify = '1' WHERE id = '{$can_order['id']}'";

     $result = db_query($con, $qry);

     var_dump($qry); die;
  }

}
 ?>  
