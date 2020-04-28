<!-- nav -->
	<section class="bg-dark">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark">
				<!-- Brand/logo -->
				<a class="navbar-brand" href="home.php">
					<img src="images/finallogo.png" width="130px" height="60px">
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
							<a class="nav-link" href="<?php echo url('about.php'); ?>">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('menu.php'); ?>">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#people">Catering Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Food System</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('contact.php'); ?>">
								contact
							</a>
						</li>
						<li class="ml-3 my-2">
							<a href="<?php echo url('cms/login.php'); ?>"><button class="bg-dark btn btn-primary">Log in </button></a>
						</li>
						<li class="ml-3 my-2">
							<a href="signup.php" target="_blank"><button class="bg-dark btn btn-primary"> Sign Up </button></a>
						</li>
						<!-- style="color:rgba(255,255,255,.5); -->
					</ul>
				</div>		
			</nav>
		</div>
	</section>