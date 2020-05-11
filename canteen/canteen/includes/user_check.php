<?php 

	if(!isset($_SESSION['user']) || empty($_SESSION['user'])) {
		redirect(url('cms/login.php'));
		die;
	}