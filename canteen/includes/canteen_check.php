<?php 

	if($_SESSION['user']['type'] == 'student') {
		// $_SESSION['message'] = [
		// 	'content' => 'Access Denied.',
		// 	'type' => 'danger'
		// ];

		redirect(url('cms'));
		die;
	}