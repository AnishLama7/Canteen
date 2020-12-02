<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	$title = 'Edit Users';
	require_once 'templates/header.php';
	$active = 'users';
	require_once 'templates/nav.php';
 ?>

	<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Edit Users</h1>
				<hr>
			</div>
			<?php include_once 'templates/message.php'; ?>

			<div class="col-6 mx-auto">

				<?php 
					$sql = "SELECT * FROM users WHERE username = '{$_GET['username']}' AND (type = 'staff' OR type = 'student') ";
					$result = db_query($con, $sql);
					$user = db_fetch_assoc($result);


				 ?>

				<form method="POST" action="<?php echo url('cms/user_update.php'); ?>">
					<div class="form-group"> 
					<label for="name">Full Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter fullname" name="name" value="<?php echo $user['name']; ?>" readonly>
				</div>

				<div class="form-group">
					<label for="phone">Phone:</label>
					<input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo $user['phone']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" value="<?php echo $user['email']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="uname">Username:</label>
					<input type="text" class="form-control" id="username" placeholder="Enter new username" name="username" value="<?php echo $user['username']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="type">Type:</label>
					<select name="type" id="type" class="form-control">
						<option value="student">Student</option>
						<option value="staff">Staff</option>
					</select>
				</div>

				<div class="form-group">
						<label for="request">Request:</label>
						<select name="request" id="request" class="form-control" required>
							<option style="color: red;"> value="pending" <?php echo $user['request'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
							<option value="accepted">Accepted</option>
							<option value="rejected">Rejected</option>
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php require_once 'templates/footer.php'; ?>

