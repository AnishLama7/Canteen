<?php  

	require_once '../includes/init.php';
	session_destroy();
	redirect(url('cms/login.php'));