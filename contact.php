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
	<title>dum</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sty.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#contact{
			background-image: url("5.jpg");
		}
		h4{
			color:darkorange;
		}
		a{
			padding-right: 10px;
			color:black;
		}
	</style>
</head>
<body>
	<!-- 1st part -->
	<section style="background-color:darkorange;">
		<div class="container">
			<span class="mr-3 font-weight-bold">
				<i class="fa fa-mobile"></i> +977 9823741999
			</span>
			<span>
				<a href="https://www.gmail.com"><i class="fa fa-envelope"></i> lama7453@gmail.com </a>
			</span>
		</div>
	</section>
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
	<!-- 3RD PART -->
	<section id="contact">
		<div class="container pt-5 pb-5">
			<div class="row">
				<!-- input part -->
				<div class="bg-dark pl-4 col-lg-8 col-md-8 col-12" style="opacity:0.9">
					<h3 style="color:darkorange;" class="mb-4 mt-4">Send us a message</h3>
					<form>
						<div class="form-row text">
							<div class="col">
								<input type="text" class="form-control bg-dark text-white mb-2" id="first" placeholder="First name" name="first">
							</div>
							<div class="col">
								<input type="text" class="form-control bg-dark text-white mb-2" id="last" placeholder="last name" name="last">
							</div>
						</div>		
						<div class="form-row mt-2">
							<div class="col">
								<input type="text" class="form-control bg-dark text-white mb-2" id="email" placeholder="email address" name="email">
							</div>
							<div class="col">
								<input type="number" class="form-control bg-dark text-white mb-2" id="phone" placeholder="phone number" name="phone">
							</div>
						</div>
						<div class="form-row mt-2">
							<div class="col">
								<textarea placeholder="message" style="width:100%" class="bg-dark text-white mb-2"></textarea>
							</div>
						</div>
						<div class="form-group form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="remember">
								<div class="text-white"> Remember me
								</div>
							</label>
						</div>
						<button class="btn btn-secondary mb-5">Send message</button>
					</form>
				</div>
				<!-- info part -->
				<div class="pl-5 col-lg-4 col-md-4 col-12"  style="background-color:darkorange;">	
					<h3 class="mb-4 mt-4">Info</h3>
					<p>
						Online college canteen<br>
						New summit college<br>
						Shantinagar gate,kathmandu<br>
						01-445165<br>
						onlinecanteen@gmail.com
					</p>
					<div class="mt-4 pl-2">
						<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-f"></i></a>
						<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
						<a href="https://www.twitter.com"><i class="fa 	fa-twitter"></i></a>
					</div>
					<button type="button" class="btn btn-secondary mt-4" data-toggle="modal" data-target="#myModal1">
						See on map
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- 4th part -->
	<section class="bg-secondary">
		<div class="container pt-5 pb-5 text-white">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-6">
					<h4 class="mb-2">Canteen Info</h4>
					<p>
						Online college canteen<br>
						New summit college<br>
						Shantinagar gate,kathmandu<br>
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-6">
					<h4 class="mb-2">Hours</h4>
					<p>Sunday-friday: 8am-2pm><br>
						Saturday:closed

					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<h4 class="mb-2">Contacts</h4>
					<p>
						Phone: 01-4445566, 01-545165<br>
						Email: onlinecanteen@gmail.com
						<div class="pl-2">
							<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-f"></i></a>
							<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
							<a href="https://www.twitter.com"><i class="fa 	fa-twitter"></i></a>
						</div>
					</p>
				</div>
			</div>	
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
	<!-- modal part -->
	<div>
		<div class="modal" id="myModal1">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.1683922675315!2d85.34189230432688!3d27.688155380525394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19923c4af157%3A0x506cf9fc9e6a6f61!2sFlorida%20H.%20S.%20School!5e0!3m2!1sen!2snp!4v1587133263178!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>