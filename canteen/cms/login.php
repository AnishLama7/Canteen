<?php 
require_once '../includes/init.php';
$title = 'Login';
require_once 'templates/header.php';
?>

<body class="bg-secondary bod">
	<div class="mx-auto bg-dark p-5 mt-5 col-lg-4 col-md-8 col-12" style="opacity:0.8">
		<h1 class="text-center">Canteen Login</h1>
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
					<button type="submit" class="btn btn-secondary mt-2 but font-weight-bold"> Log In</button>
				</div>
			</form>
		</div>
	</div>
</body>

<?php 
require_once 'templates/footer.php';
?>
