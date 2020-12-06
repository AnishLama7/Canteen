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

<div class="col-lg-2 col-md-4 col p-4 side-navi">
	<div class="row">
		<div class="col my-2 ">
			<img src="<?php echo url('images/newlogo.png'); ?>" class="img-fluid" alt="Responsive image">
		</div>

		<div class="col-12 text-center my-4">
			 <i class="fas fa-user mr-2"></i><?php echo $_SESSION['user']['name']; ?> <br>
			 <small>
			 <a href="<?php echo url('cms/profile_edit.php'); ?>" title="Edit Profile"><i class="fas fa-edit my-3"></i></a>

			 <a href="<?php echo url('cms/logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt my-3"></i></a>
			 </small>

		</div>
		<div class="col-12">
			<ul class="side-menu">
				<?php if($_SESSION['user']['type'] == 'canteen'): ?>
				<li <?php echo $active == 'menu' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/menu.php'); ?>"><i class="fas fa-book-open mr-2"></i>Menu</a>
				</li>

				<li <?php echo $active == 'categories' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/category.php'); ?>"><i class="fas fa-tags mr-2"></i>Category</a>
				</li>

				<li <?php echo $active == 'order' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/can_order.php'); ?>"><i class="fas fa-hamburger mr-2"></i>Order</a>
				</li>

				<li <?php echo $active == 'users' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/users.php'); ?>"><i class="fas fa-users mr-2"></i>Users</a>
				</li>

				<li <?php echo $active == 'comments' ? 'class="active"' : ''; ?>>
					<a href="<?php echo url('cms/comments.php'); ?>"><i class="fas fa-comments mr-2"></i>Comments</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>		
</div>