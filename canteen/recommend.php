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
						$sql = "SELECT * FROM std_order WHERE order_price > 20 AND user_id ='{$_SESSION['user']['id']}'";
						$result = db_query($con, $sql);
						$std_order = db_fetch_assoc($result);
						?>

					<img src="<?php echo url('images/'.$std_order['food_image']); ?>" alt="<?php echo $std_order['order_name']; ?>">

					<div class="carousel-caption">
						<h3><?php echo $std_order['order_name']; ?></h3>	
					</div>
				</div>

				
				<div class="carousel-item">
					<?php 
						$sql = "SELECT * FROM std_order WHERE order_price = 20  ";
						$result = db_query($con, $sql);
						$std_order = db_fetch_assoc($result);
						?>
					<img src="<?php echo url('images/'.$std_order['food_image']); ?>" alt="<?php echo $std_order['order_name']; ?>">
					<div class="carousel-caption">
						<h3><?php echo $std_order['order_name']; ?></h3>
					</div>
				</div>


				<div class="carousel-item">
					<img src="images/5.jpg" alt="Chowmein">
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
