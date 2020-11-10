<?php 
	require_once '../includes/init.php';
	require_once '../includes/user_check.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/db_connection.php';
	$title = 'User';
	require_once 'templates/header.php';
	$active = 'users';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-light my-3">
		<div class="row">
			<div class="col">
				<h1 style="text-align: center;">Users</h1>
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
							<th>Username</th>
							<th>Sex</th>
							<th>Faculty</th>
							<th>Phone</th>						
							<th>Email</th>
							<th>Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sql = "SELECT COUNT(id) AS total FROM users ";
							$result = db_query($con, $sql);
							$ret = db_fetch_assoc($result);
							$total = $ret['total'];

							$limit = 15;

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


							$sql = "SELECT * FROM users where type = 'student' OR type = 'staff' LIMIT {$offset}, {$limit} ";
							$result = db_query($con, $sql);

							$n = $offset + 1;
							if($result && db_num_rows($result) > 0):?>

						 <?php while($user = db_fetch_assoc($result)): ?>

						 	<tr>
						 		<td><?php echo $n++; ?></td>
						 		<td><?php echo $user['name'];?></td>
						 		<td><?php echo $user['username']; ?></td>
						 		<td><?php echo $user['sex']; ?></td>
						 		<td><?php echo $user['faculty']; ?></td>
						 		<td><?php echo $user['phone']; ?></td>
						 		<td><?php echo $user['email']; ?></td>
						 		<td><?php echo ucfirst($user['type']); ?></td>
						 		
						 		<td>
						 			<a href="<?php echo url('cms/user_delete.php?username='.$user['username']); ?>" class="delete">&nbsp;&nbsp;&nbsp;<i  class="fas fa-trash"></i></a>
						 		</td>
						 	</tr>

					</tbody>
						<?php endwhile; ?>
						<?php else: ?>
						<tr>
							<td colspan="11" class="text-center">No data found</td>
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
      						<a class="page-link" href="<?php echo url('cms/users.php?page='.($page -1)) ?>"><i class="fas fa-angle-left"></i></a>
    					</li>

    					<?php endif; ?>

    					<?php for($i = 1; $i <= $totalpages; $i++): ?>
    					<?php if($i == $page): ?>
    					
    					<li class="page-item active">
      						<a class="page-link" href="#"><?php echo $i; ?></a>
    					</li>
    					<?php else: ?>
    					<li class="page-item"><a class="page-link" href="<?php echo url('cms/users.php?page='.$i); ?>"><?php echo $i; ?></a></li>
    					<?php endif; ?>
    					<?php endfor; ?>

    					<?php if($page < $totalpages): ?>
   
    					<li class="page-item">
     						<a class="page-link" href="<?php echo url('cms/users.php?page='.($page+1)); ?>"><i class="fas fa-angle-right"></i></a>
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

 
		