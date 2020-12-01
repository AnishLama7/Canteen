<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	$title = 'Edit Profile';
	require_once 'templates/header.php';
	
?>

	<div class="col-12 bg-dark">
		<div class="row text-white">
				<?php include_once 'templates/message.php'; ?>

			<div class="container bg-dark col-lg-5">
				<?php $user = $_SESSION['user']; ?>

			<div class="col my-5">
				<form action="<?php echo url('cms/profile_update.php'); ?>" name="myform" method="POST">
			<h1 class="text-center">Edit My Profile</h1><hr color="orange">
			<div class="form-group"> 
				<label for="name">Full Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter fullname" name="name" value="<?php echo $user['name']; ?>" readonly>
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
		</div>
	</div>
</div>

<?php require_once 'templates/footer.php'; ?>

			

	