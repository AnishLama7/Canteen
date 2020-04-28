<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	$title = 'Edit Menu';
	require_once 'templates/header.php';
	$active = 'menu';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col-12">
				<h1>Edit Menu</h1>
			</div>
			<?php include_once 'templates/message.php'; ?>

			<div class="col-6 mx-auto">

				<?php 
					$sql = "SELECT *FROM menu WHERE slug = '{$_GET['slug']}' ";
					$result = db_query($con, $sql);
					$menu = db_fetch_assoc($result);
				 ?>

				<form method="POST" action="<?php echo url('cms/menu_update.php'); ?>" enctype = "multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $menu['id']; ?>">

					<div class="form-group">
						<label for="first_name">Food Name</label>
						<input type="text" name="name" id="name" class="form-control" value="<?php echo $menu['name']; ?>" required>
					</div>

					<div class="form-group">
						<label for="Slug">Slug</label>
						<input type="text" name="slug" id="slug" class="form-control" value="<?php echo $menu['slug']; ?>" required>
					</div>

					<!-- <div class="form-group">
						<label for="category_id">Category</label>
						<select name="category_id" id="category_id" class="form-control" required>
							<option value="">Select a category</option>
							<?php 
								$sql = "SELECT id, name FROM categories";
								$result = db_query($con, $sql);
								if($result && db_num_rows($result) > 0 ):
							 ?>
							 <?php while($category = db_fetch_assoc($result)): ?>
							 <option value="<?php echo $category['id']; ?>" <?php echo $category['id'] == $menu['category_id'] ? 'selected' : ''; ?>><?php echo $category['name']; ?></option>
							 <?php endwhile; ?>
							 <?php endif; ?>
						</select>
					</div> -->

					<div class="form-group">
						<label for="price">Price</label>
						<input type="number" name="price" id="price" class="form-control" value="<?php echo $menu['price']; ?>" required>
					</div>
					

					<div class="form-group">
						<label for="image">Food Image</label>
						<input type="file" name="image" id="image" class="form-control" accept="image/*">
						<div class="img-preview">
							<?php if(!empty($menu['image'])): ?>
								<img src="<?php echo url('images/'.$menu['image']); ?>" class = "img-fluid mt-3">
							<?php endif; ?>	
						</div>
					</div>
						<input type="hidden" name="old_image" value="<?php echo $menu['image']; ?>">

						<div class="form-group">
						<label for="type">Food Type</label>
						<select name="type" id="type" class="form-control" required>
							<?php if($_SESSION['menu']['type'] == 'veg') ?>
							<option value="veg" <?php echo $menu['type'] == 'veg' ? 'selected': ''; ?>>Veg</option>
							<?php if($_SESSION['menu']['type'] == 'non-veg') ?>
							<option value="non-veg"  <?php echo $menu['type'] == 'non-veg' ? 'selected': ''; ?>>Non-Veg</option>
							<?php if($_SESSION['menu']['type'] == 'drinks') ?>
							<option value="drinks"  <?php echo $menu['type'] == 'drinks' ? 'selected': ''; ?>>Drinks</option>
						</select>
					</div>

					<div class="form-group">
						<label for="total">Available Items</label>
						<input type="text" name="total" id="total" class="form-control" value="<?php echo $menu['total']; ?>">
					</div>

					<div class="form-group">
						<label for="created_at">updated_at</label>
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
		