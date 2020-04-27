<?php 

	if($_SESSION['user']['type'] == 'canteen') {
		$_SESSION['message'] = [
			'content' => 'Access Denied.',
			'type' => 'danger'
		];

		redirect(url('cms'));
		die;
	}