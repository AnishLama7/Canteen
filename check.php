<?php 
	session_start();
	$con = mysqli_connect('localhost', 'root');
	if($con){
		//echo "Connection successful";
	}
	else{
		echo "Connection failed";
	}

	$db = mysqli_select_db($con,'onlinecanteen');
	if(isset($_POST['submit'])){
		$name = $_POST['uname'];
		$pwd = $_POST['pwd'];

		$sql = "select * from register where username = '$name' and password = '$pwd'";
		$query =mysqli_query($con,$sql);

		$row = mysqli_num_rows($query);
			if($row == 1){
				echo "Login successful";
				$_SESSION['user'] = $name;
				header('location:inside.php'); 
			}
			else{
				echo "password incorrect";
				header('location:home.php');
			}
		
	}

 ?>