<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$username2 = $_POST['username2'];
	$password2 = $_POST['password2'];
	$number = $_POST['number'];
	$nic = $_POST['nic'];
	$vehicleType = $_POST['vehicleType'];
	$lisensePlate = $_POST['lisensePlate'];
	$area = $_POST['area'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'cab service data');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO drivers (firstName, lastName, gender, email, username2, password2, number, nic, vehicleType, lisensePlate, area) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		
		//bind_parameter : bind the values of the variables to the corresponding placeholders

		$stmt->bind_param("sssssssssss", $firstName, $lastName, $gender, $email, $username2, $password2, $number, $nic, $vehicleType, $lisensePlate, $area);
		$execval = $stmt->execute();
		echo $execval;
		
		echo "<script>window.location.href='home.php';</script>";

	
        
        exit();
		$stmt->close();
		$conn->close();
	}
?>
