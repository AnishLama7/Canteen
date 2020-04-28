<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	$title = 'Menu';
	require_once 'templates/header.php';
	$active = 'menu';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row bg-dark" style="opacity:0.8">
			<div class="col">
				<h1>Menu</h1>
			</div>
			<div class="col-auto mt-3">
				<a href="<?php echo url('cms/menu_add.php'); ?>" class="btn btn-warning btn-sm" ><i class="fas fa-plus mr-2"></i>Add Food</a>
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
							<th>Food Name</th>
							<th>Slug</th>
							<th>Price</th>
							<th>Food Image</th>
							<th>Type</th>
							<th>Food Category</th>
							<th>Available no.</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
					</thead>
						<?php 
							$sql = "SELECT * FROM menu ";
							$result = db_query($con, $sql); 
							
							$n = 1;
							if($result && db_num_rows($result) > 0):
							?>

							<?php while($menu = db_fetch_assoc($result)): ?>
							
							<tr>
						 		<td><?php echo $n++; ?></td>
						 		<td><?php echo $menu['name']; ?></td>
						 		<td><?php echo $menu['slug']; ?></td>
						 		<td><?php echo $menu['price']; ?></td>
						 		<td>
						 			<?php if(!is_null($menu['image'])): ?>
						 				<img src="<?php echo url('images/'.$menu['image']); ?>" class = "img-fluid" width="100" height="100">
						 				<?php else: ?>
						 					n/a
						 			<?php endif; ?>
						 		</td>

						 		<td><?php echo ucfirst($menu['type']); ?></td>
						 		<td></td>
						 		<td><?php echo $menu['total']; ?></td>
						 		<td><?php echo date('j M Y h:i:s A', strtotime($menu['created_at'])); ?></td>
						 		<td><?php echo date('j M Y h:i:s A', strtotime($menu['updated_at'])); ?></td>
						 		<td>
						 			<a href="<?php echo url('cms/menu_edit.php?slug='.$menu['slug']); ?>"><i class="fas fa-edit mr-3"></i></a>
						 			<a href="<?php echo url('cms/menu_delete.php?slug='.$menu['slug']); ?>" class="delete"><i  class="fas fa-trash"></i></a>
						 		</td>
						 	</tr>
					</tbody>
						<?php endwhile; ?>
						<?php else: ?>
						<tr>
							<td colspan="12" class="text-center">No data found</td>
						</tr>	
					<?php endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';

 
		