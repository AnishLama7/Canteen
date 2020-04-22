<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('location:home.php');
}
else{
	echo 'welcome '. $_SESSION['user'];	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<?php include 'link.php'?>
</head>
<body>
	<!-- nav -->
	<section class="bg-dark">
		<div class="container">
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
							<a class="nav-link" href="insideHome.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="insideAbout.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="insideMenu.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#people">Catering Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Food System</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="insideContact.php">
								contact
							</a>
						</li>
						<!-- style="color:rgba(255,255,255,.5); -->
						<div class="mr-0">
							<li class="ml-3 my-2">
								<a href="logout.php" class="bg-dark btn btn-primary"> log out</a>
							</li>
						</div>
					</ul>
				</div>		
			</nav>
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
	<!-- footer -->
	<div id="footer" class="bg-light p-5">
		<div class="wrapper">
			<div class="fwmark"></div>
			<div class="text-right">
				&copy; Copyright 2013 AJAS FOODS
			</div>

		</div>    
	</div>
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
</body>
</html>