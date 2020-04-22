<?php 
	require_once '../includes/init.php';
	$title = 'Online';
	require_once 'templates/header.php';
 ?>

<div class="col-4 mx-auto">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Canteen Login</h1>
			</div>
			<?php include_once 'templates/message.php'; ?>
			<div class="col-12">
				<form method="POST" action="<?php echo url('cms/login_check.php') ?>">
					<div class="form-group">
						<label for="username">Username/Email</label>
						<input type="text" name="username" id="username" class="form-control" required >
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="upassword" class="form-control" required >
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary"> log In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';
 ?>
		