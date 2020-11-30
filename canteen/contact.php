<?php 
	require_once 'includes/init.php';
	$title = 'Contact';
	require_once 'includes/db_functions.php';
?>
<?php require 'templates/header.php'; ?>
<style type="text/css">
	#contact{
	background-image: url("images/4.jpg");
	background-repeat: no-repeat;
	/*background-size: cover;*/	
	background-attachment: fixed;
	background-size: 100% 100%;
}
</style>
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
	<?php require 'templates/nav.php'; ?>
	

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
								<input type="text" class="form-control bg-dark text-white mb-2" id="first" placeholder="First name" name="first" required>
							</div>
							<div class="col">
								<input type="text" class="form-control bg-dark text-white mb-2" id="last" placeholder="last name" name="last" required>
							</div>
						</div>		
						<div class="form-row mt-2">
							<div class="col">
								<input type="text" class="form-control bg-dark text-white mb-2" id="email" placeholder="email address" name="email" required>
							</div>
							<div class="col">
								<input type="number" class="form-control bg-dark text-white mb-2" id="phone" placeholder="phone number" name="phone" required>
							</div>
						</div>
						<div class="form-row mt-2">
							<div class="col">
								<textarea placeholder="message" style="width:100%" class="bg-dark text-white mb-2" required></textarea>
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
						<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
						<a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
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
							<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
							<a href="https://www.twitter.com"><i class="fab	fa-twitter"></i></a>
						</div>
					</p>
				</div>
			</div>	
		</div>
	</section>
	<?php require 'templates/footer.php'; ?>
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