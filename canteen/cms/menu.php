<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	$title = 'Menu';
	require_once 'templates/header.php';
	$active = 'menu';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 my-3">
		<div class="row">
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
				<div class="table-responsive"></div>
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

							$sql = "SELECT COUNT(id) AS total FROM menu ";
							$result = db_query($con, $sql);
							$ret = db_fetch_assoc($result);
							$total = $ret['total'];

							$limit = 6;

							$totalpages = ceil($total/$limit);

							if(isset($_GET['page']) && !empty($_GET['page'])) {
								$page = $_GET['page'];

								if($page > $totalpages) {
									$page = $totalpages;
								}
							}
							else {
								$page = 1;
							}

							$offset = ($limit * $page) - $limit;
							$sql = "SELECT * FROM menu LIMIT {$offset}, {$limit}  ";
							$result = db_query($con, $sql); 
							
							$n = $offset + 1;
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
						 		<?php 
						 			$qry = "SELECT name FROM categories WHERE id = '{$menu['category_id']}'";
						 			$res = db_query($con, $qry);
						 			$Category = db_fetch_assoc($res);
						 		 ?>
						 		<td><?php echo $Category['name']; ?></td>
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

			<?php if($totalpages > 1): ?>
			<div class="col-12">
				<nav>
  					<ul class="pagination">
  						<?php if($page == 1): ?>
    					<li class="page-item disabled">
      						<a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
    					</li>
    					<?php else: ?>
    						<li class="page-item">
      						<a class="page-link" href="<?php echo url('cms/menu.php?page='.($page -1)) ?>"><i class="fas fa-angle-left"></i></a>
    					</li>

    					<?php endif; ?>

    					<?php for($i = 1; $i <= $totalpages; $i++): ?>
    					<?php if($i == $page): ?>
    					
    					<li class="page-item active">
      						<a class="page-link" href="#"><?php echo $i; ?></a>
    					</li>
    					<?php else: ?>
    					<li class="page-item"><a class="page-link" href="<?php echo url('cms/menu.php?page='.$i); ?>"><?php echo $i; ?></a></li>
    					<?php endif; ?>
    					<?php endfor; ?>

    					<?php if($page < $totalpages): ?>
   
    					<li class="page-item">
     						<a class="page-link" href="<?php echo url('cms/menu.php?page='.($page+1)); ?>"><i class="fas fa-angle-right"></i></a>
    					</li>
    					<?php else: ?>
    						<li class="page-item disabled">
     						<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
     					</li>
     					<?php endif; ?>
  					</ul>
				</nav>
			</div>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';

 
		