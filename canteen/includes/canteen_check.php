<?php 

	if($_SESSION['user']['type'] == 'student' || 'staff') {
		$_SESSION['message'] = [
			'content' => 'Access Denied.',
			'type' => 'danger'
		];

		redirect(url('cms'));
		die;
	}