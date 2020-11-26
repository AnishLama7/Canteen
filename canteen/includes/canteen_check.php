<?php 

	if($_SESSION['user']['type'] == 'student') {
		// $_SESSION['message'] = [
		// 	'content' => ' ',
		// 	'type' => 'danger'
		// ];

		redirect(url('cms'));
		die;
	}