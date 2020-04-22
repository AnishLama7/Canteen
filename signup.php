<!DOCTYPE html>
<html>
<head>
	<title>sign</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'link.php' ?>
	<script type="text/javascript">
		function matchpass(){
			var firstPassword = document.myform.pwd.value;
			var secondPassword = document.myform.pwd1.value;
			if(firstPassword==secondPassword){
				// alert("password matched");
				return true;
			}
			else{
				alert("Password must be same");
				return false;
			}
		}
	</script>
</head>
<body  class="bg-dark">
	<div  class="container bg-light text-dark w-50 mt-5">
		<form action="insert.php" method="POST" class="needs-validation" onsubmit="return matchpass()">
			<h2 class="text-center">Sign Up</h2><hr width="25%" color="white">
			<div class="form-group"> 
				<label for="fullname">Full Name:</label>
				<input type="text" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname" required>
			</div>
			<div class="form-group">
				<div class="form-check-inline">
					<span style="margin-right: 10px;">Sex:</span>
					<label class="form-check-label" for="radio1">
						<input type="radio" class="form-check-input" id="radio1" name="radio" value="M">Male
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label" for="radio2">
						<input type="radio" class="form-check-input" id="radio2" name="radio" value="F">Female
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label" for="radio3">
						<input type="radio" class="form-check-input" id="radio3" name="radio" value="O">Other
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="form-check-inline">
					<label class="form-check-label" for="radio11">Faculty:
						<input type="radio" class="form-check-input" id="radio11" name="radio1" value="CSIT">BSC CSIT
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label" for="radio12">
						<input type="radio" class="form-check-input" id="radio12" name="radio1" value="BBA">BBA
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label"  for="radio13">
						<input type="radio" class="form-check-input" id="radio13" name="radio1" value="BCA">BCA
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="phone">Phone:</label>
				<input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" required>
			</div>
			<div class="form-group">
				<label for="uname">Username:</label>
				<input type="text" class="form-control" id="uname" placeholder="Enter new username" name="uname" required>
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
			</div>
			<div class="form-group">
				<label for="pwd1">Retype Password:</label>
				<input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd1" required>
			</div>
			<div class="form-group form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember" required> I agree on all terms and conditions.
				</label>
			</div>
			<div class=" text-center">
				<button type="submit" class="btn btn-primary mb-1" name="submit">Submit</button><br>
				<button type="reset" name="res" value="reset" class="btn btn-primary mb-3">Reset</button>
			</div>
		</form>
	</div>
</body>
</html>