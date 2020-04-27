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
		<div class="row">
			<div class="col">
				<h1>Menu</h1>
			</div>
			<div class="col-auto mt-3">
				<a href="<?php echo url('cms/menu_add.php'); ?>" class="btn btn-primary btn-sm" ><i class="fas fa-plus mr-2"></i>Add Food</a>
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
							<th>Price</th>
							<th>Food_Image</th>
							<th>Type</th>
							<th>Food_category</th>
							<th>Time</th>
							<th>Available no.</th>
						</tr>
					</thead>
						<?php 
							$sql = "SELECT * FROM food ";
							$result = db_query($con, $sql); 
							
							$n = 1;
							if($result && db_num_rows($result) > 0):
							?>

							<?php while($food = db_fetch_assoc($result)): ?>
							<tr>
								<td><?php echo $n++; ?></td>
								<td><?php echo $food['fname']; ?></td>
								<td><?php echo $food['price']; ?></td>
								<td>
						 			<?php if(!is_null($food['image'])): ?>
						 				<img src="<?php echo url('images/'.$food['image']); ?>" class = "img-fluid">
						 				<?php else: ?>
						 					n/a
						 			<?php endif; ?>
						 		</td>
						 		<td><?php echo $food['type']; ?></td>
						 		<td><?php echo $food['food_category']; ?></td>
						 		<td><?php echo $food['time']; ?></td>
						 		<td></td>
						 		<td>
						 			<a href="<?php echo url('cms/menu_edit.php?name='.$food['fname']); ?>"><i class="fas fa-edit mr-3"></i></a>
						 			<a href="<?php echo url('cms/menu_delete.php?name='.$food['fname']); ?>" class="delete"><i  class="fas fa-trash"></i></a>
						 		</td>
							</tr> 
					</tbody>
						<?php endwhile; ?>
						<?php else: ?>
						<tr>
							<td colspan="6" class="text-center">No data found</td>
						</tr>	
					<?php endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';

 
		