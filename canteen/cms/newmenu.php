<?php 
require_once '../includes/init.php';
require_once '../includes/db_connection.php';
require_once '../includes/canteen_check.php';
require_once '../includes/user_check.php';
$title = 'Menu';
// require_once 'templates/header.php';
$active = 'menu';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?>-Canteen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/cms.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/all.css')?>">

</head>

<style type="text/css">
	.side-navi{
		background-color: black;
		opacity: 0.8;
		height: 100vh;
		color: #ffffff;
	}
	.side-navi a{
	color: #fff;
}
.side-navi a{
	padding: 5px 10px;
	display: inline-block;
}
@media(max-width:770px){
	.side-navi{
		height: auto;
	}
}
</style>
<body>
<section>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-12 p-4 side-navi">
			<h1>Online Canteen</h1>
			<i class="fas fa-user mr-2"></i><?php echo $_SESSION['user']['name']; ?> <br>
			<small>
				<a href="<?php echo url('cms/edit_profile.php'); ?>" title="Edit Profile"><i class="fas fa-edit"></i></a>
				<a href="<?php echo url('cms/logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt"></i></a>
			</small>
			<ul class="side-menu">
				<li <?php echo $active == 'menu' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/menu.php'); ?>"></i>Menu</a>
				</li>
				<li <?php echo $active == 'order' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/order.php'); ?>"></i>Order</a>
				</li>
				<li <?php echo $active == 'comments' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/comments.php'); ?>"></i>Comments</a>
				</li>
			</ul>			
		</div>		
		<div class="col-lg-9 col-md-8 col-12 side-menu pr-4 pl-2">
			<div class="bg-white pr-3 pl-3 pt-4">
			<div class="row">
				<div class="col">
					<h1>Menu</h1>
				</div>
				<div class="col-auto mt-3">
					<a href="<?php echo url('cms/menu_add.php'); ?>" class="btn btn-warning btn-sm" ><i class="fas fa-plus mr-2"></i>Add Food</a>
				</div>
			</div>
			<?php include_once 'templates/message.php'; ?>
			<div class="table-responsive">
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
						<tbody>	
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
		</section>
	</body>
	</html>
		<?php 
		require_once 'templates/footer.php';


