<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('location:home.php');
}
else{
	echo 'welcome '. $_SESSION['user'];	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSIDE HOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'link.php'?>
</head>
<body>
	<!-- nav -->
	<section class="bg-dark">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark">
				<!-- Brand/logo -->
				<a class="navbar-brand" href="home.php">
					Online College <br>Canteen
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="insideHome.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="insideAbout.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="insideMenu.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#people">Catering Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Food System</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="insideContact.php">
								contact
							</a>
						</li>
						<!-- style="color:rgba(255,255,255,.5); -->
						<div class="mr-0">
							<li class="ml-3 my-2">
								<a href="logout.php" class="bg-dark btn btn-primary"> log out</a>
							</li>
						</div>
					</ul>
				</div>		
			</nav>
		</div>
	</section>

</body>
</html>