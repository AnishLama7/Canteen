<?php 
	require_once 'includes/init.php';
	$title = 'Menu Page';
	$page = 'menu';
	require_once 'includes/db_functions.php';
?>

	<?php require 'templates/header.php'; ?>
	<?php require 'templates/nav.php'; ?>
	
	<!-- paragraph section -->
	<section class="container my-5">
		<p> Here, customer's can have the outer look of our menu page with its quantity and price. Admin which is canteen can conveniently set menu and process orders to users for better operations.</p>
	</section>
	<!-- menu item -->
	<section class="container">
		
		<div class="table-responsive">
			<table class="table table-hover table-striped table-responsive-sm table-responsive-md">
				<thead class="thead-dark">
					<tr>
						<th style="color: orange;">#</th>
						<th style="color: orange;">Name</th>
						<th style="color: orange;">Quantity</th>
						<th style="color: orange;">Price</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<tr>
						<td>1</td>
						<td>Mo:Mo</td>
						<td>1 plate</td>
						<td>Rs.100</td>
					</tr>
					
					<tr>
						<td>2</td>
						<td>Samosa</td>
						<td>1 piece</td>
						<td>Rs.25</td>
					</tr>

					<tr>
						<td>3</td>
						<td>Chowmein</td>
						<td>1 plate</td>
						<td>Rs.80</td>
					</tr>
					
					<tr>
						<td>4</td>
						<td>Fry Rice</td>
						<td>1 plate</td>
						<td>Rs.90</td>
					</tr>
					
					<tr>
						<td>5</td>
						<td>Pakouda</td>
						<td>1 plate</td>
						<td>Rs.50</td>
					</tr>

					<tr>
						<td>6</td>
						<td>Milk tea</td>
						<td>1 cup</td>
						<td>Rs.20</td>
					</tr>

					<tr>
						<td>7</td>
						<td>Black tea</td>
						<td>1 cup</td>
						<td>Rs.15</td>
					</tr>

					<tr>
						<td>8</td>
						<td>Drinks</td>
						<td>250 ml</td>
						<td>Rs.70</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<?php require 'templates/footer.php'; ?>

</body>
</html>