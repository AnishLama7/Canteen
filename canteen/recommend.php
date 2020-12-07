<style type="text/css">
	.carousel-inner img {
	width: 100%;
	height: 100%;
}
	.sizered{
		width:35%;
	}
</style>

<h2 style="text-align: center">Recommended For You</h2>
<section class="container sizered">
		<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<?php 
						// $checkDataExists = select * from recommend where user_id = {current_user_id}
						// if(checkDataExsists)?user already ordered and has their preferences and show data from querying which order_type users like :(else) show some random menu item";
						$sql = "SELECT order_name, food_image FROM orders WHERE order_price > 20 LIMIT 0,3";
						$result = db_query($con, $sql);
					 ?>
					<img src="images/3.jpg" alt="samosha">
					<div class="carousel-caption">
						<h3>Samosha</h3>
					</div>
					
				</div>

				<div class="carousel-item">
					<img src="images/4.jpg" alt="momo">
					<div class="carousel-caption">
						<h3>MOMO</h3>
					</div>
				</div>
				
				<div class="carousel-item">
					<img src="images/5.jpg" alt="chowmin">
					<div class="carousel-caption">
						<h3>Chowmein</h3>
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
