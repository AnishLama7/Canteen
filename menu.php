<?php 
	require_once 'includes/init.php';
	$title = 'Menu';
	require_once 'includes/db_functions.php';
?>

	<?php require 'templates/header.php'; ?>
	<?php require 'templates/nav.php'; ?>
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
	<!-- paragraph section -->
	<section class="container">
		<p>Online Canteen System is an online system developed by Team AJAS for different College's Canteen. Customers of Online canteen can place orders from the convenience of their Computers or mobile phones simply browsing Website. They can view the menu and their expense reports. Canteen's Admin can conveniently set menus and process orders and better manage the operations.</p>
	</section>
	<!-- menu item -->
	<section class="container">
		<input class="form-control" id="myInput" type="text" placeholder="Search food..." style="height: 50px;">
		<br />
		<div>
			<table class="table table-hover table-striped table-responsive-sm table-responsive-md">
				<thead class="thead-dark">
					<tr>
						<th style="color: orange;">Name</th>
						<th style="color: orange;">Quantity</th>
						<th style="color: orange;">Price</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<tr>
						<td>Buff MOMO(steam /fry/chilly)</td>
						<td>1 plate</td>
						<td>rs100 / rs120 / rs140</td>
					</tr>
					<tr>
						<td>Veg MOMO(steam/fry/chilly)</td>
						<td>1 plate</td>
						<td>rs100 / rs120 / rs140</td>
					</tr>
					<tr>
						<td>Chicken MOMO(steam/fry/chilly)</td>
						<td>1 plate</td>
						<td>rs100 / rs120 / rs140</td>
					</tr>
					<tr>
						<td>Samosa</td>
						<td>1 piece</td>
						<td>rs25</td>
					</tr>
					<tr>
						<td>Buff Chowmein</td>
						<td>1 plate</td>
						<td>rs110</td>
					</tr>
					<tr>
						<td>Veg Chowmein</td>
						<td>1 plate</td>
						<td>rs100</td>
					</tr>
					<tr>
						<td>Chicken Chowmein</td>
						<td>1 plate</td>
						<td>rs140</td>
					</tr>
					<tr>
						<td>Buff Fry Rice</td>
						<td>1 plate</td>
						<td>rs110</td>
					</tr>
					<tr>
						<td>Veg Fry Rice</td>
						<td>1 plate</td>
						<td>rs100</td>
					</tr>
					<tr>
						<td>Chicken Fry Rice</td>
						<td>1 plate</td>
						<td>rs140</td>
					</tr>
					<tr>
						<td>Buff Chilly</td>
						<td>1 plate</td>
						<td>rs110</td>
					</tr>
					<tr>
						<td>Veg Chilly</td>
						<td>1 plate</td>
						<td>rs100</td>
					</tr>
					<tr>
						<td>Veg Pakouda</td>
						<td>1 plate</td>
						<td>rs80</td>
					</tr>
					<tr>
						<td>Milk tea</td>
						<td>1 cup</td>
						<td>rs20</td>
					</tr>
					<tr>
						<td>Black tea</td>
						<td>1 cup</td>
						<td>rs20</td>
					</tr>
					<tr>
						<td>Coke/Dew/Sprite/Slice</td>
						<td>250 ml</td>
						<td>rs50</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<?php require 'templates/footer.php'; ?>
	<script type="text/javascript" src="<?php echo url('js/home.js'); ?>"></script>

</body>
</html>