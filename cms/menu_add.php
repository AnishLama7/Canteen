<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	$title = 'Add Menu';
	require_once 'templates/header.php';
	$active = 'menu';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col-12">
				<h1>Add Food Menu</h1>
			</div>
			<?php include_once 'templates/message.php'; ?>

			<div class="col-8 mx-auto">
				<form method="POST" action="<?php echo url('cms/menu_store.php'); ?>" enctype = "multipart/form-data">
					<div class="form-group">
						<label for="name">Food Name</label>
						<input type="text" name="name" id="name" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" name="slug" id="slug" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="price">Price</label>
						<input type="number" name="price" id="price" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="image">Food Image</label>
						<input type="file" name="image" id="image" class="form-control" accept="image/*">
						<div class="img-preview">	
						</div>
					</div>

					<div class="form-group">
						<label for="type">Food Type</label>
						<select name="type" id="type" class="form-control" required>
							<option value="veg">Veg</option>
							<option value="non-veg">Non-Veg</option>
						</select>
					</div>

					<div class="form-group">
						<label for="total">Available Items</label>
						<input type="text" name="total" id="total" class="form-control">
					</div>

					<div class="form-group">
<<<<<<< Updated upstream
=======
						<label for="created_at">Created_at</label>
						<input type="time" name="created_at" id="created_at" class="form-control">
					</div>


					<div class="form-group">
						<label for="updated_at">Updated_at</label>
						<input type="time" name="updated_at" id="updated_at" class="form-control">
					</div>

					<div class="form-group">
>>>>>>> Stashed changes
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
		