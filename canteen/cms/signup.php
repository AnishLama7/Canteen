<?php 
require_once '../includes/init.php';
$title = 'Sign up';
require_once '../includes/db_functions.php';
?>
<?php require 'templates/header.php'; ?>

<script type="text/javascript">
	function matchpass(){
		var Pass1 = document.myform.password1.value;
		var Pass2 = document.myform.password2.value;
		if(Pass1==Pass2){
				// alert("password matched");
				return true;
			}
			else{
				alert("Password must be same");
				return false;
			}

			if(pass1.length < 5){
				alert ("Password must be 5 character");
				return false;
			}
    }
	</script>

	<style type="text/css">
		.bodd{
			background-image: url("images/3.jpg");
			background-repeat: no-repeat;
			/*background-size: cover;*/	
			background-attachment: fixed;
			background-size: 100% 100%;
		}
		/*span text lai white gareko ho*/
		label, span{
			color: white;
		}
	</style>

	<body  class="bg-secondary">
		<div  class="container bg-dark mt-5 p-4 col-lg-6 col-md-8 col-12">
			<?php include_once 'templates/message.php'; ?>
			<form action="<?php echo url('cms/sign_check.php'); ?>" name="myform" method="POST" class="needs-validation w-75 mx-auto" onsubmit="return matchpass()">
				<h1 class="text-center">Sign Up</h1><hr color="orange">
				<div class="form-group"> 
					<label for="name">Full Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter fullname" name="name" required>
				</div>

				<div>
					<span style="margin-right: 10px; color: white">Sex:</span><br>
					<span>
							<input type="radio" id="radio1" name="sex" value="male" class="m-1">Male
							<input type="radio" id="radio2" name="sex" value="female" class="m-1">Female
							<input type="radio" id="radio3" name="sex" value="other" class="m-1">Other
						</span>
				</div>
				<div class="mt-2 mb-2">
					<span style="margin-right: 10px; color: white">Faculty:</span><br>
					<span>
							<input type="radio" class="m-1" id="radio11" name="faculty" value="CSIT">BSC CSIT
							<input type="radio" class="m-1" id="radio12" name="faculty" value="BBA">BBA
							<input type="radio" class="m-1" id="radio13" name="faculty" value="BCA">BCA
						</span>
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
					<input type="text" class="form-control" id="username" placeholder="Enter new username" name="username" required>
				</div>
				<div class="form-group">
					<label for="type">Type:</label>
					<select name="type" id="type" class="form-control" required>
						<option>Select user type</option>
						<option value="student">Student</option>
						<option value="staff">Staff</option>
						<option value="guest">Guest</option>
					</select>
				</div>
				<div class="form-group">
					<label for="id_no">ID No.</label>
					<input type="number" name="id_no" class="form-control" placeholder="Enter your ID No." required>
				</div>

				<div class="form-group">
					<label for="type">Batch:</label>
					<select name="batch" id="batch" class="form-control" required>
						<option> Select your batch</option>
						<option value="2073">2073</option>
						<option value="2074">2074</option>
						<option value="2075">2075</option>
						<option value="2076">2076</option>
						<option value="2077">2077</option>
					</select>
				</div>

				<div class="form-group">
					<label for="password1">Password:</label>
					<input type="password" class="form-control" id="password1" placeholder="Enter password" name="password1" minlength="5" required>
				</div>
				<div class="form-group">
					<label for="password2">Retype Password:</label>
					<input type="password" class="form-control" id="password2" placeholder="Retype password" name="password2" required>
				</div>
				
				<div class=" text-center">
					<button type="submit" class="but btn btn-secondary mb-1 font-weight-bold" name="submit">Submit</button>

				</div>
			</form>
		</div>
	</body>
	<?php require 'templates/footer.php'; ?>
	</html>