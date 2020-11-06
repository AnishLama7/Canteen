<?php 
	require_once 'includes/init.php';
	require_once 'includes/db_connection.php';
	require_once 'includes/student_check.php';
	require_once 'includes/user_check.php';
	$title = 'My';

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

	<style type="text/css">
		img{
			height: 80px;
			width: 130px;
		}
	</style>

</head>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2 side-nav">
				<div class="row">
					<div class="col-12 text-center ">
						<div class="col my-4">
							<img src="<?php echo url('images/newlogo.png'); ?>">
						</div>
						<h1>Online College Canteen</h1>
					</div>
					<div class="col-12 text-center my-2">
						<i class="fas fa-user mr-2"></i><?php echo $_SESSION['user']['name']; ?> <br>
						 <small>
						 <a href="<?php echo url('cms/profile_edit.php'); ?>" title="Edit Profile"><i class="fas fa-edit"></i></a>

						 <a href="<?php echo url('cms/logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt"></i></a>
						 </small>
					</div>
				</div>
			</div>

	<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col">
				<h1>My Profile</h1>
			</div>
		</div>
		<div class="row">
			<?php include_once 'cms/templates/message.php'; ?>
		</div>
		<div class="row">
			<div class="col-12 mt-3">
				<table class="table table-stripped table-hover table-sm">
					<thead>
						<tr>
							<th>#</th>
							<th>Food Name</th>
							<th>Price</th>
							<th>Food image</th>
							<th>DateTime</th>
							<th>Action</th>
						</tr>
					</thead>
					 <tbody>
						<?php 
							$sql = "SELECT COUNT(id) AS total FROM orders WHERE user_id ='{$_SESSION['user']['id']}'";
							$result = db_query($con, $sql);
							$ret = db_fetch_assoc($result);
							$total = $ret['total'];

							$limit = 20;

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


							$sql = "SELECT * FROM orders WHERE user_id ='{$_SESSION['user']['id']}' LIMIT {$offset}, {$limit} ";
							$result = db_query($con, $sql);

							$n = $offset + 1;
							if($result && db_num_rows($result) > 0):?>

						 <?php while($order = db_fetch_assoc($result)): ?>

						 	<tr>
						 		<td><?php echo $n++; ?></td>

						 		<td><?php echo $order['order_name']; ?></td>

						 		<?php 
										$qry = "SELECT price FROM menu WHERE id = '{$order['menu_id']}'";
						 			    $res = db_query($con, $qry);
						 			    $menu = db_fetch_assoc($res);
									 ?>
									<td><?php echo $menu['price']; ?></td>

									<td></td>

									<td><?php echo $order['created_at']; ?></td>

									<td><a href="<?php echo url('stdorder_delete.php'); ?>" class="delete"><i  class="fas fa-trash"></i></a></td>
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

