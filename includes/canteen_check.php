<?php 

	if($_SESSION['user']['type'] == 'user') {
		$_SESSION['message'] = [
			'content' => 'Access Denied.',
			'type' => 'danger'
		];

		redirect(url('cms'));
		die;
	}