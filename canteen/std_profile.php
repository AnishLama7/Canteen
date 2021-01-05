<?php 
	require_once 'includes/init.php';
	require_once 'includes/db_connection.php';
	require_once 'includes/student_check.php';
	require_once 'includes/user_check.php';
	$title = 'My';
	$active = '';

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?>-Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/cms.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/all.css')?>">

</head>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col p-4 side-navi">
				<div class="row">
					<div class="col-12 text-center ">
						<div class="col text-center ">
							<img src="<?php echo url('images/newlogo.png'); ?>" class="img-fluid my-4" alt="Responsive image">
						</div>

						<div class="col-12 text-center my-2">
							<h6><i class="fas fa-user mr-2"></i><?php echo $_SESSION['user']['name'];?></h6> 
						</div>

					</div>

					<div class="col-12 mt-5">
						<ul class="side-menu">
							

							<li>
								<a href="<?php echo url('cms/profile_edit.php'); ?>"><i class="fas fa-edit mr-2"></i>Edit Profile</a>
							</li>

							<li>
								<a href="<?php echo url('cms/logout.php'); ?>"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>

							</li>
						</ul>
					</div>
				</div>
			</div>

	<div class="col">
	<div class="col-12 my-3">
		<div class="row">
			<div class="col">
				<h1 class="text-center">My Profile</h1>
			</div>
		</div>
		<div class="row">
			<?php include_once 'cms/templates/message.php'; ?>
		</div>
		<div class="row">
			<div class="col-12 mt-3">
				<div class="table-responsives"></div>
				<table class="table table-stripped table-hover table-lg">
					<thead>
						<tr class="text-center">
							<th>#</th>
							<th>Food Name</th>
							<th>Food image</th>
							<th>DateTime</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>SubTotal</th>
							<th>Rate</th>
						</tr>	

					</thead>
					 <tbody>
						<?php 
							$sql = "SELECT COUNT(id) AS total FROM std_order WHERE user_id ='{$_SESSION['user']['id']}'";
							$result = db_query($con, $sql);
							$ret = db_fetch_assoc($result);
							$total = $ret['total'];

							$limit = 7;

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


							$sql = "SELECT * FROM std_order WHERE user_id ='{$_SESSION['user']['id']}' LIMIT {$offset}, {$limit} ";
							$result = db_query($con, $sql);

							$n = $offset + 1;
							if($result && db_num_rows($result) > 0):?>

						 <?php while($std_order = db_fetch_assoc($result)): ?>

						 	<tr class="text-center">
						 		<td><?php echo $n++; ?></td>

					 			<td><?php echo $std_order['order_name']; ?></td>

					 			<td style="width:40px; height: 40px;">
					 			<?php  if(!empty($std_order['food_image'])): ?>
										<img src="<?php echo url('images/'.$std_order['food_image']); ?>" class = "img-fluid">
									<?php endif; ?>	
								</td>

								<td><?php echo $std_order['created_at']; ?></td>

								<td><?php echo $std_order['quantity']; ?></td>
								<?php 
									$qry = "SELECT price FROM menu WHERE id = '{$std_order['menu_id']}'";
					 			    $res = db_query($con, $qry);
					 			    $menu = db_fetch_assoc($res);
								 ?>
								<td>&#8360;<?php echo $std_order['order_price'] ??'-'; ?></td>

								<td>&#8360;
									<?php 
										 $subt = $std_order['order_price']*$std_order['quantity'];
                                         echo "$subt";
									 ?>
								</td>

								<td><a href="<?php echo url('rate.php'); ?>" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Rate</a></td>
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
      						<a class="page-link" href="<?php echo url('std_profile.php?page='.($page -1)) ?>"><i class="fas fa-angle-left"></i></a>
    					</li>

    					<?php endif; ?>

    					<?php for($i = 1; $i <= $totalpages; $i++): ?>
    					<?php if($i == $page): ?>
    					
    					<li class="page-item active">
      						<a class="page-link" href="#"><?php echo $i; ?></a>
    					</li>
    					<?php else: ?>
    					<li class="page-item"><a class="page-link" href="<?php echo url('std_profile.php?page='.$i); ?>"><?php echo $i; ?></a></li>
    					<?php endif; ?>
    					<?php endfor; ?>

    					<?php if($page < $totalpages): ?>
   
    					<li class="page-item">
     						<a class="page-link" href="<?php echo url('std_profile.php?page='.($page+1)); ?>"><i class="fas fa-angle-right"></i></a>
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

	<script type="text/javascript" src="<?php echo url('js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/cms.js')?>"></script>
	<script type="text/javascript" src="<?php echo url('js/all.js')?>"></script>

</body>
</html>

