<?php 
	session_start();
	$con = mysqli_connect('localhost', 'root');
	if($con){
		//echo "Connection successful";
	}
	else{
		echo "Connection failed";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONTACT PAGE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'link.php'?>
</head>
<body>
	<!-- nav -->
	<section class="bg-dark">
		<div class="container ">
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
							<a class="nav-link" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="menu.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#people">Catering Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Food System</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">
								contact
							</a>
						</li>
						<!-- style="color:rgba(255,255,255,.5); -->
						<li class="ml-3 my-2">
							<button class="bg-dark btn btn-primary" data-toggle="modal" data-target="#myModal">Log in</button>
						</li>
						<li class="ml-3 my-2">
							<a href="signup.php" target="_blank"><button class="bg-dark btn btn-primary"> Sign Up </button></a>
						</li>
					</ul>
				</div>		
			</nav>
		</div>
	</section>
	<!-- modal part -->
	<section class="container-fluid bg-dark text-light">
		<div class="modal fade modal-m text-dark bg-dark" id="myModal">
			<div class="modal-dialog modal-m">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Log in</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form name="myform" action="check.php" method="POST">
							<div class="form-group"> 
								<label for="uname">Username:</label>
								<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
							</div>
							<div class="form-group">
								<label for="pwd">password:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
							</div>
							<div class=" text-center">
								<button type="submit" class="btn btn-primary mb-1" name="submit">Submit</button><br>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container mt-1">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<pre class="float-right">
			helllo
			this is pre and its a new features i 
			have recently
			learned.   thanks
		</pre>
		<div>
			<img src="images/1.jpg" height="10px">
		</div>
		<div class="mt-3">
			<img src="images/2.jpg">
		</div>
	</section>
	<!-- footer -->
	<div id="footer" class="bg-light p-5">
		<div class="wrapper">
			<div class="fwmark"></div>
			<div class="text-right">
				&copy; Copyright 2013 AJAS FOODS
			</div>

		</div>    
	</div>
</body>
</html>