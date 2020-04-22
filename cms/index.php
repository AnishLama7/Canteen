<?php 
	require_once '../includes/init.php';
	$title = 'Online';
	require_once 'templates/header.php';
	$active = '';
	require_once 'templates/nav.php';
 ?>

<div class="col">
	<div class="col-12 bg-white my-3">
		<div class="row">
			<div class="col-12">
				<h1>Online Canteen System</h1>
			</div>
			<div class="row">
				<?php include_once 'templates/message.php'; ?>
		</div>
		</div>
	</div>
</div>

<?php 
	require_once 'templates/footer.php';
 ?>
		