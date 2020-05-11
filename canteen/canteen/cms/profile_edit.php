<?php 
	require_once '../includes/init.php';
	$title = 'Sign up';
	require_once '../includes/db_functions.php';
?>
<?php require '../templates/header.php'; ?>

<style type="text/css">
	label, span{
		color: white;
	}
</style>


<body  class="bg-secondary">
	<div  class="container bg-dark mt-5 p-4 col-lg-6 col-md-8 col-12">
		<?php include_once 'templates/message.php'; ?>
		<?php $user = $_SESSION['user']; ?>

		<form action="<?php echo url('cms/profile_update.php'); ?>" name="myform" method="POST">
			<h1 class="text-center">Edit My Profile</h1><hr color="orange">
			<div class="form-group"> 
				<label for="name">Full Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter fullname" name="name" value="<?php echo $user['name']; ?>" ?>">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" value="<?php echo $user['email']; ?>" readonly>
			</div>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Enter new username" name="username" value="<?php echo $user['username']; ?>" readonly>
			</div>
			
			<div class="form-group">
				<label for="old_password">Old Password:</label>
				<input type="password" class="form-control" id="old_password" placeholder="Enter password" name="old_password" required>
			</div>
			<div class="form-group">
				<label for="new_password"> New Password:</label>
				<input type="password" class="form-control" id="new_password" placeholder="Enter password" name="new_password" required>
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm Password:</label>
				<input type="password" class="form-control" id="confirm_password" placeholder="Enter password" name="confirm_password" required>
			</div>
			
			<div class=" text-center">
				<button type="submit" class="but btn btn-secondary mb-1 font-weight-bold" name="submit">Save</button><br>
			</div>
		</form>
	</div>

	<?php include_once '../templates/footer.php'; ?>
</body>
</html>