<?php 
require_once 'includes/init.php';
$title = 'About';
require_once 'includes/db_functions.php';
?>
<?php require 'templates/header.php'; ?>
<?php require 'templates/nav.php'; ?>
<!-- modal part -->
	<!-- <section class="container-fluid bg-dark text-light">
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
	</section> -->

	<!-- guff dine part -->
	<section class="container mt-1">
		<p>Online Canteen System is an online system developed by Team AJAS for different College's Canteen. Customers of Online canteen can 	 place orders from the convenience of their Computers or mobile phones simply browsing Website.
			Nowadays people don’t have much time to spend in canteen by just there and waiting in a queue to take their order. Many customers visit the canteen in their lunch break and recess so they have limited time to eat and return to their respective classes and works. So this Web Application helps them to save time and order food whenever they want without waiting in a queue again and again. 
			Online Canteen System enables the end users to register online, read and select the food from e-menu card and order food online by just selecting the food that the user want to have from the e-menu using this website.
		</p>
		<div>
			<img src="images/1.jpg" style="width: 100%; height: auto;">
		</div>
		<div class="mt-3">
			<img src="images/2.jpg" style="width: 100%; height: auto;">
		</div>
	</section>
	<?php include 'templates/footer.php'; ?>
</body>
</html>