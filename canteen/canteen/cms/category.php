<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	$title = 'Category';
	require_once 'templates/header.php';
	$active = 'categories';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col">
				<h1>Category</h1>
			</div>
			<div class="col-auto mt-3">
				<a href="<?php echo url('cms/category_add.php'); ?>" class="btn btn-warning btn-sm" ><i class="fas fa-plus mr-2"></i>Add Category</a>
			</div>
		</div>
		<div class="row">
			<?php include_once 'templates/message.php'; ?>
		</div>
		<div class="row">
			<div class="col-12 mt-3">
				<table class="table table-stripped table-hover table-sm">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Slug</th>
							<th>Delete</th>
						</tr>
					</thead>
						<?php 
							$sql = "SELECT * FROM categories ";
							$result = db_query($con, $sql); 
							
							$n = 1;
							if($result && db_num_rows($result) > 0):
							?>

							<?php while($category = db_fetch_assoc($result)): ?>
							
							<tr>
						 		<td><?php echo $n++; ?></td>
						 		<td><?php echo $category['name']; ?></td>
						 		<td><?php echo $category['slug']; ?></td>
						 	<td>
						 			<a href="<?php echo url('cms/category_delete.php?slug='.$category['slug']); ?>" class="delete"><i  class="fas fa-trash"></i></a>
						 		</td>
						 	</tr>
					</tbody>
						<?php endwhile; ?>
						<?php else: ?>
						<tr>
							<td colspan="4" class="text-center">No data found</td>
						</tr>	
					<?php endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';

 
		