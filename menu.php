<?php 
session_start();
$con = mysqli_connect('localhost', 'root');
if($con){
	//echo "Connection successful";
}
else{
	echo "Connection failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<?php include 'link.php'?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- nav bar -->
	<section class="bg-dark">
		<div class="container ">
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
							<a class="nav-link" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="menu.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#people">Catering Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Food System</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">
								contact
							</a>
						</li>
						<!-- style="color:rgba(255,255,255,.5); -->
						<li class="ml-3 my-2">
							<button class="bg-dark btn btn-primary" data-toggle="modal" data-target="#myModal">Log in</button>
						</li>
						<li class="ml-3 my-2">
							<a href="signup.php" target="_blank"><button class="bg-dark btn btn-primary"> Sign Up </button></a>
						</li>
					</ul>
				</div>		
			</nav>
		</div>
	</section>
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