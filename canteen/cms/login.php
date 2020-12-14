<?php 
require_once '../includes/init.php';
$title = 'Login';
require_once 'templates/header.php';
?>
<style type="text/css">
	.bod{
	background-image: url("../images/4.jpg");
	background-repeat: no-repeat;
	/*background-size: cover;*/	
	background-attachment: fixed;
	background-size: 100% 100%;
}
</style>
<body class="bg-secondary bod">
	<div class="mx-auto bg-dark p-5 mt-5 col-lg-4 " style="opacity:0.9;">
		<h1 class="text-center">Login</h1>
		<hr color="orange">
		<?php include_once 'templates/message.php'; ?>
		<div class="text-white">
			<form method="POST" action="<?php echo url('cms/login_check.php') ?>">
				<div class="form-group">
					<label for="username">Username/Email:</label>
					<input type="text" name="username" id="username" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="upassword" class="form-control" required >
				</div>
				<div class="form-group text-center" >
					<button type="submit" class="but btn btn-secondary mt-2 font-weight-bold"> Log In</button>
				</div>
			</form>
		</div>
	</div>
</body>

<?php 
require_once 'templates/footer.php';
?>
