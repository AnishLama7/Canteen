<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	$title = 'Order';
	require_once 'templates/header.php';
	$active = 'order';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col">
				<h1 style="text-align:center;">Order</h1>
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
							<th>Student Name</th>
							<th>Order Name</th>
							<th>Order No</th>
							<th>Price</th>
							<!-- <th>Food Image</th> -->
							<!-- <th>Type</th>
							<th>Food Category</th> -->
							<th>Quantity</th>
							<th>Order Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


						<?php 
							$sql = "SELECT COUNT(id) AS total FROM orders ";
							$result = db_query($con, $sql);
							$ret = db_fetch_assoc($result);
							$total = $ret['total'];

							$limit = 13;

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



						
							$sql = "SELECT * FROM orders limit {$offset}, {$limit} ";
							$result = db_query($con, $sql);

							$n = $offset + 1;
							if($result && db_num_rows($result) > 0):
							?>

							<?php while($order = db_fetch_assoc($result)):?>

								<tr>
									<td><?php echo $n++; ?></td>

									<?php 
										$qry = "SELECT name FROM users WHERE id = '{$order['user_id']}'";
						 			    $res = db_query($con, $qry);
						 			    $user = db_fetch_assoc($res);	
									 ?>
									<td><?php echo $user['name']; ?></td>

									<td><?php echo $order['order_name']; ?></td>

									<td><?php echo $order['order_no']; ?></td>

									<?php 
										$qry = "SELECT price FROM menu WHERE id = '{$order['menu_id']}'";
						 			    $res = db_query($con, $qry);
						 			    $menu = db_fetch_assoc($res);
									 ?>
									<td><?php echo $menu['price']; ?></td>

									<td><?php echo $order['quantity']; ?></td>

									<td><?php echo $order['created_at']; ?></td>

									<td>
						 			<a href="<?php echo url('../std_order.php'); ?>" class="ok" ><i class="fas fa-check mr-3"></i></a>
						 			<!-- <a href="<?php echo url('cms/canorder_delete.php?slug='.$menu['slug']); ?>" class="delete"><i  class="fas fa-trash"></i></a> -->
						 		</td>
								</tr>

							
					</tbody>
						<?php endwhile; ?>
						<?php else: ?>
						<tr>
							<td colspan="12" class="text-center">No Order Available</td>
						</tr>	
					<?php endif; ?>
				</table>
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
      						<a class="page-link" href="<?php echo url('cms/can_order.php?page='.($page -1)) ?>"><i class="fas fa-angle-left"></i></a>
    					</li>

    					<?php endif; ?>

    					<?php for($i = 1; $i <= $totalpages; $i++): ?>
    					<?php if($i == $page): ?>
    					
    					<li class="page-item active">
      						<a class="page-link" href="#"><?php echo $i; ?></a>
    					</li>
    					<?php else: ?>
    					<li class="page-item"><a class="page-link" href="<?php echo url('cms/can_order.php?page='.$i); ?>"><?php echo $i; ?></a></li>
    					<?php endif; ?>
    					<?php endfor; ?>

    					<?php if($page < $totalpages): ?>
   
    					<li class="page-item">
     						<a class="page-link" href="<?php echo url('cms/can_order.php?page='.($page+1)); ?>"><i class="fas fa-angle-right"></i></a>
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


 
		