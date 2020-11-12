<style type="text/css">
	a{
		font-size: 22px;
	}
	



</style>
<!-- nav -->
<section class="bg-dark">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-md navbar-dark">
			<!-- Brand/logo -->
			<a class="navbar-brand" href="home.php">
				<img src="images/newlogo.png" width="140px" height="65px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">

				<ul class="navbar-nav">

					<li class="nav-item mr-3">
						<a class="nav-link" href="<?php echo url('home.php'); ?>">Home</a>
					</li>

					<li class="nav-item mr-3">
						<a class="nav-link" href="<?php echo url('about.php'); ?>">About Us</a>
					</li>

					<li class="nav-item mr-3">
						<a class="nav-link" href="<?php echo url('menu.php'); ?>">Menu</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo url('contact.php'); ?>">
							Contact
						</a>
					</li>
				</ul>
			</div>


<!-- 			<div class="collapse navbar-collapse" id="collapsibleNavbar">
 -->
				<ul class="nav navbar-nav justify-content-end">

					<li><a href="<?php echo url('cms/login.php'); ?>" class="text-secondary mr-3"><i class="fas fa-sign-in-alt text-secondary " ></i>Login</a></li>
					<li><a href="<?php echo url('signup.php'); ?>" class="text-secondary"><i class="fas fa-user text-secondary"></i> Sign Up</a></li> 
				</ul>
<!-- 			</div>		
 -->		</nav>
	</div>
</section>