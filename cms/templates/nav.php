<div class="col-2 side-nav">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Online Canteen</h1>
		</div>
		<div class="col-12 text-center">
			 <i class="fas fa-user mr-2"></i><?php echo $_SESSION['user']['name']; ?> <br>
			 <small>
			 <a href="<?php echo url('cms/edit_profile.php'); ?>" title="Edit Profile"><i class="fas fa-edit"></i></a>

			 <a href="<?php echo url('cms/logout.php'); ?>" title="Logout" ><i class="fas fa-sign-out-alt"></i></a>
			 </small>

		</div>
		<div class="col-12 mt-5">
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
	</div>		
</div>