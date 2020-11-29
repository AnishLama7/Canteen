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

			<div class="col-6 my-3">
				<select id="datelist" class="btn btn-default">
				  <option selected>Select date</option>
				  <?php 
						$sql = "SELECT DISTINCT order_date FROM can_order";
						$result = db_query($con, $sql);
						 while($can_order = db_fetch_assoc($result)){
					      $can_id = isset($_GET['order_date']) ? $_GET['order_date']: 0;
					      $selected = ($can_id == $can_order['order_date']) ? " selected" : "";
					      echo "<option$selected value=".$can_order['order_date'].">".$can_order['order_date']."</option>";
       					 }
						?>
				</select>
			</div>

			<div class="col-6">
				<h1 style="text-align:left;">Order</h1>
			</div>
			
		</div>
		<div class="row">
			<?php include_once 'templates/message.php'; ?>
		</div>
		<div class="row">
			<div class="col-12 mt-3">
				<table class="table table-stripped table-hover table-sm">
					<thead>
						<tr class="text-center">
							<th>#</th>
							<th>Student Name</th>
							<th>Order Name</th>
							<th>Order No</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Time</th>
							<th>Date</th>
							<th>Break Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


						<?php 

							$sql = "SELECT COUNT(id) AS total FROM can_order ";
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

							$sql = "SELECT * FROM can_order limit {$offset}, {$limit} ";
							$result = db_query($con, $sql);

							$n = $offset + 1;
							if($result && db_num_rows($result) > 0):
							?>

							<?php while($can_order = db_fetch_assoc($result)):?>

								<tr class="text-center">

									<td><?php echo $n++; ?></td>

									<?php 
										$qry = "SELECT name FROM users WHERE id = '{$can_order['user_id']}'";
						 			    $res = db_query($con, $qry);
						 			    $user = db_fetch_assoc($res);	
									 ?>
									<td><?php echo $user['name']; ?></td>

									<td><?php echo $can_order['order_name']; ?></td>

									<td><?php echo $can_order['order_no']; ?></td>

									<?php 
										$qry = "SELECT price FROM menu WHERE id = '{$can_order['menu_id']}'";
						 			    $res = db_query($con, $qry);
						 			    $menu = db_fetch_assoc($res);
									 ?>
									<td><?php echo $can_order['order_price']; ?></td>

									<td><?php echo $can_order['quantity']; ?></td>

									<td><?php echo $can_order['order_time']; ?></td>

									<td><?php echo $can_order['order_date']; ?></td>

									<td><?php echo $can_order['break_time']; ?></td>

									<td>
											<button type="button" onclick="myFunction()" class="btn btn-warning btn-sm" id="demo">Notify</button>
											<script>
												function myFunction() {
												document.getElementById("demo").innerHTML = "Order Ready";
												}
											</script>
						 			<!-- <a href="<?php echo url('std_order.php'); ?>" class="ok" ><i class="fas fa-check mr-3"></i></a> -->

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

<script type="text/javascript">
  $(document).ready(function(){
    $("#datelist").on('change', function(){
      if($(this).val() == 0)
      {
        window.location = 'can_order.php';
      }
      else
      {
        window.location = 'can_order.php?Order_date='+$(this).val();
      }
    });
  });
</script>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
  <script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>
 </body>
 </html>


 
		