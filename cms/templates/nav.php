<div class="col-2 side-nav">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Online Canteen</h1>
		</div>
		<div class="col-12 text-center">
			 <i class="fas fa-user mr-2"></i><?php echo $_SESSION['cuser']['first_name'].' '.$_SESSION['cuser']['middle_name'].' '.$_SESSION['cuser']['last_name']; ?> <br>
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
				
			</ul>
		</div>
	</div>		
</div>