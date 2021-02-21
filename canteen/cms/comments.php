<?php 
	require_once '../includes/init.php';
	require_once '../includes/db_connection.php';
	require_once '../includes/canteen_check.php';
	require_once '../includes/user_check.php';
	$title = 'Comments';
	require_once 'templates/header.php';
	$active = 'comments';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 my-3">
		<div class="row">
			<div class="col">
				<h1>Comments</h1>
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
							<th>Name</th>
							<th>Review No</th>
							<th>Review</th>
							<th>DateTime</th>
						</tr>
					</thead>
						<?php 

							$sql = "SELECT COUNT(id) AS total FROM review ";
							$result = db_query($con, $sql);
							$ret = db_fetch_assoc($result);
							$total = $ret['total'];

							$limit = 10;

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
							$sql = "SELECT * FROM review LIMIT {$offset}, {$limit}  ";
							$result = db_query($con, $sql); 
							
							$n = $offset + 1;
							if($result && db_num_rows($result) > 0):
							?>

							<?php while($review = db_fetch_assoc($result)): ?>
							
							<tr>
						 		<td><?php echo $n++; ?></td>
						 		<td><?php echo $review['userName']; ?></td>
						 		<td><?php echo $review['userReview']; ?></td>
								<td><?php echo $review['userMessage']; ?></td>
						 		<td><?php echo date('j M Y h:i:s A', strtotime($review['dateReviewed'])); ?></td>
			
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
      						<a class="page-link" href="<?php echo url('cms/comments.php?page='.($page -1)) ?>"><i class="fas fa-angle-left"></i></a>
    					</li>

    					<?php endif; ?>

    					<?php for($i = 1; $i <= $totalpages; $i++): ?>
    					<?php if($i == $page): ?>
    					
    					<li class="page-item active">
      						<a class="page-link" href="#"><?php echo $i; ?></a>
    					</li>
    					<?php else: ?>
    					<li class="page-item"><a class="page-link" href="<?php echo url('cms/comments.php?page='.$i); ?>"><?php echo $i; ?></a></li>
    					<?php endif; ?>
    					<?php endfor; ?>

    					<?php if($page < $totalpages): ?>
   
    					<li class="page-item">
     						<a class="page-link" href="<?php echo url('cms/comments.php?page='.($page+1)); ?>"><i class="fas fa-angle-right"></i></a>
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

 
		