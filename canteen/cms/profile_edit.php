<?php 
	require_once '../includes/init.php';
	$title = 'Sign up';
	require_once '../includes/db_functions.php';
	$active = 'edit profile';
?>
<?php require '../templates/header.php'; ?>

<style type="text/css">
	label{
		color: white;
	}
</style>

<body>

<div class="col">
	<div class="col-12 bg-dark my-3">
		<div class="row">
			
			<?php include_once 'templates/message.php'; ?>
			<?php $user = $_SESSION['user']; ?>

			<div class="col-6 mx-auto">
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

<div class="text-right">
	&copy; Copyright 2013 AJAS FOODS
</div>

	<script type="text/javascript" src="<?php echo url('js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>

</body>
</html>