<?php 
require_once 'includes/init.php';
$title = 'Home';
require_once 'includes/db_functions.php';
?>
<?php require 'templates/header.php'; ?>
<?php require 'templates/nav.php'; ?>
<style type="text/css">
	.carousel-inner img {
	width: 100%;
	height: 100%;

}
body {
	background: grey;
}
</style>


	<!-- carousel part -->
	<section class="container">
		<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active my-3">
					<img src="images/3.jpg" alt="Los Angeles" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Samosa</h3>
						<p style="color: red;">Rich in protein</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/4.jpg" alt="Chicago" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Momo</h3>
						<p style="color: blue;">Rich in fiber</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/5.jpg" alt="New York" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Chowmein</h3>
						<p style="color: black">Rich in Carbs</p>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</section>
<?php include 'templates/footer.php'; ?>
</body>
</html>