<?php 
require_once 'includes/init.php';
require_once 'includes/db_connection.php';
$title = 'About Page';
$page = 'about';
require_once 'includes/db_functions.php';
?>
<?php require 'templates/header.php'; ?>
<?php require 'templates/nav.php'; ?>
<!-- modal part -->


	<!-- guff dine part -->
	<div class="container my-3">
		<p>
			Online Canteen System is an online system developed by Team AJAS for different College's Canteen. Customers of Online canteen can 	 place orders from the convenience of their Computers or mobile phones simply browsing Website.
			Nowadays people don’t have much time to spend in canteen by just there and waiting in a queue to take their order. Many customers visit the canteen in their lunch break and recess so they have limited time to eat and return to their respective classes and works. So this Web Application helps them to save time and order food whenever they want without waiting in a queue again and again. 
			Online Canteen System enables the end users to register online, read and select the food from e-menu card and order food online by just selecting the food that the user want to have from the e-menu using this website.
		</p>

		<img src="images/2.jpg" alt="Nature" class="responsive" width="600" height="400">
		<style type="text/css">
			.responsive {
			  width: 100%;
			  height: auto;
			}
		</style>
		
	</div>
	<?php include 'templates/footer.php'; ?>
</body>
</html>