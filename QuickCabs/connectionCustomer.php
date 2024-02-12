<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$username1 = $_POST['username1'];
	$password1 = $_POST['password1'];
	$number = $_POST['number'];
	$nic = $_POST['nic'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'cab service data');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO customers (firstName, lastName, gender, email, username1, password1, number, nic) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

		//bind_parameter : bind the values of the variables to the corresponding placeholders

		$stmt->bind_param("ssssssis", $firstName, $lastName, $gender, $email, $username1, $password1, $number, $nic);
		$execval = $stmt->execute();
		echo $execval;
		echo "successfully registered </ br>";
		echo '<a href="customerLogin.php">Go to Login Page</a>';
		$stmt->close();
		$conn->close();
	} 
?>
