<style type="text/css">
	a{
		font-size: 19px;
	}
</style>
<!-- nav -->
	<section class="bg-dark">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark">
				<!-- Brand/logo -->
				<a class="navbar-brand" href="home.php">
					<img src="images/newlogo.png" width="130px" height="60px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">

						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('home.php'); ?>">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('about.php'); ?>">About Us</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('menu.php'); ?>">Menu</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('contact.php'); ?>">
								Contact
							</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
					  <li><a href="<?php echo url('cms/login.php'); ?>"><i class="fas fa-sign-in-alt"></i>Login</a></li>
				      <li><a href="<?php echo url('signup.php'); ?>"><i class="fas fa-user"></i> Sign Up</a></li> 
				    </ul>
					
				</div>		
			</nav>
		</div>
	</section>