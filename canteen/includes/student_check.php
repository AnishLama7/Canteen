<?php 

	if($_SESSION['user']['type'] == 'canteen') {
		// $_SESSION['message'] = [
		// 	'content' => '',
		// 	'type' => 'danger'
		// ];

		redirect(url('cms'));
		die;
	}