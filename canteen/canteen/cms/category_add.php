<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	$title = 'Add Category';
	require_once 'templates/header.php';
	$active = 'categories';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col-12">
				<h1>Add Category</h1>
			</div>
			<?php include_once 'templates/message.php'; ?>

			<div class="col-8 mx-auto">
				<form method="POST" action="<?php echo url('cms/category_store.php');?>" enctype = "multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" name="slug" id="slug" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';
 ?>


 
		