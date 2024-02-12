<?php
$conn = new mysqli('localhost', 'root', '', 'cab service data');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_user"])) {
    $userid = $_POST["userid"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $username = $_POST["username1"];
    $password = $_POST["password1"];
    $number = $_POST["number"];
    $nic = $_POST["nic"];

    // Update the customer record in the database
    $update_sql = "UPDATE customers SET firstName='$firstName', lastName='$lastName', gender='$gender', email='$email', username1='$username', password1='$password', number='$number', nic='$nic' WHERE userid=$userid";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
        echo "<script>window.location.href='adminCustomerTable.php';</script>";
        exit();
    
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
