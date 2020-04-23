<?php 
	$name = $_POST['uname'];
	$radio = $_POST['radio'];
	$radio1 = $_POST['radio1'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$pass = $_POST['pwd'];

if (!empty($name) || !empty($radio) || !empty($radio1) || !empty($phone) || !empty($email) || !empty($uname) || !empty($pass)) 
{
	$host ="localhost";
	$dbUsername = "root";
	$dbPassword ="";
	$dbname ="onlinecanteen";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}
	else{
		$SELECT = "Select email From register Where email =? Limit 1";
		$INSERT = "Insert into register(fullName, sex, faculty, phone, email, username, password) value(?, ?, ?, ?, ?, ?, ?)";
				//prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssisss", $name, $radio, $radio1, $phone, $email, $uname, $pass);
			$stmt->execute();
			echo "Your account has been created";
		}
		else{
			echo "This email has been already used";
		}
		$stmt->close();
		$conn->close();
	}
}
else{
	echo "all fields are required";
	die();
}
?>