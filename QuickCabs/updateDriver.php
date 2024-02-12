<?php
$conn = new mysqli('localhost', 'root', '', 'cab service data');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_user"])) {
    $userid = $_POST["userid"];
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
    $area = $_POST['Area'];

    // Update the customer record in the database
    $update_sql = "UPDATE drivers SET firstName='$firstName', lastName='$lastName', gender='$gender', email='$email', username2='$username2', password2='$password2', number='$number', nic='$nic', vehicleType='$vehicleType',  lisensePlate='$lisensePlate', area='$area' WHERE userid=$userid";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
        echo "<script>window.location.href='adminDriverTable.php';</script>";
        exit();
    
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
