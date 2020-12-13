// $checkDataExists = select * from recommend where user_id = {current_user_id}
// if(checkDataExsists)?user already ordered and has their preferences and show data from querying which order_type users like :(else) show some random menu item";



<?php 
					 if(!empty($_POST)){
					 $menu = $_GET['type'];
					 extract($_POST);

					
					$sql = "SELECT * FROM recommend WHERE user_id = '{$_SESSION['user']['id']}'";
					$result = db_query($con, $sql);

					if(!empty($sql)){
						$qry = "SELECT * FROM std_order WHERE LIMIT 0,3";
					}
					else{
						$qry = "SELECT * FROM menu LIMIT 0,3";
					}
					$result = db_query($con, $qry);

					if($result && db_num_rows($result) > 0)?>
		          
		          <?php while($std_order = db_fetch_assoc($result)) ?>
				        		 
					<img src="images/3.jpg" alt="samosha">
					<div class="carousel-caption">
						<h3>Samosha</h3>
					</div>
		
				</div>



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

			<?php

			$query = "SELECT * FROM recommend WHERE user_id = '{$_SESSION['user']['id']}'";
			$result = db_query($con ,$query);

			if(!isset($query)){
				$sql = "SELECT * FROM std_order LIMIT 0,3 ";
				$result = db_query($con,$sql);


		        if($result && db_num_rows($result) > 0 ): ?>
		       <?php while( $std_order = db_fetch_assoc($result)): ?>
		
				<div class="carousel-item-active">
					<?php  if(!empty($std_order['food_image'])): ?>
						<img src="<?php echo url('images/'.$std_order['food_image']); ?>" class = "img-fluid">
					<?php endif; ?>	
					<div class="carousel-caption">
						<h3><?php echo $std_order['order_name']; ?></h3>
					</div>
				</div> 
 
				<?php endwhile; ?>
				<?php endif; ?>
			</div>


				<?php  
			
			}else{
				$sql = "SELECT * FROM menu";
				$result = db_query($con,$sql);
			}
			
		     ?>
		     	
						



						

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div> 

	</section>

