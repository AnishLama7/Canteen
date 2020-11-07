<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
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
				<form method="POST" action="<?php echo url('cms/menu_store.php');?>" enctype = "multipart/form-data">
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
							<option value="Veg">Veg</option>
							<option value="Non-veg">Non-Veg</option>
						</select>
					</div>

					<div class="form-group">
						<label for="category_id">Food Category</label>
						<select name="category_id" id="category_id" class="form-control" required>
							<option value="">Select a category</option>
							<?php 
								$sql = "SELECT id, name FROM categories";
								$result = db_query($con, $sql);
								if($result && db_num_rows($result) > 0 ):
							 ?>
							 <?php while($category = db_fetch_assoc($result)): ?>
							 <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
							 <?php endwhile; ?>
							 <?php endif; ?>
						</select>
					</div>

					<div class="form-group">
						<label for="total">Available Items</label>
						<input type="text" name="total" id="total" class="form-control">
					</div>

					<div class="form-group">
						<label for="created_at">Created_at</label>
						<input type="time" name="created_at" id="created_at" class="form-control">
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
		