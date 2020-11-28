<div class="col-2 side-nav">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Online Canteen</h1>
		</div>
		<div class="col-12 text-center">
			 <i class="fas fa-user mr-2"></i><?php echo $_SESSION['user']['name']; ?> <br>
			 <small>
			 <a href="<?php echo url('profile_edit.php'); ?>" title="Edit Profile"><i class="fas fa-edit"></i></a>

			 <a href="<?php echo url('logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt"></i></a>
			 </small>

		</div>
		<div class="col-12 mt-5">
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

				<li <?php echo $active == 'user' ? 'class="active"' : ''; ?>>
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