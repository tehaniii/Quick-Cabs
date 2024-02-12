<?php
$conn = new mysqli('localhost', 'root', '', 'cab service data');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username2 = $_POST['username'];
    $password2 = $_POST['password'];

   

    

    // SQL query to check if the username and password match in the users table
    $sql = "SELECT * FROM drivers WHERE username2='$username2'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // User found, verify the password
    $row = $result->fetch_assoc();
    // Compare the entered password 
    if ($password2==$row['password2']) {
        // Password is correct, log in the user 
        echo "Login successful! Redirect to homepage...";
        // Redirect to your homepage
        header("Location: driverTable.php");
        exit();
    } else {
        // Password is incorrect
        echo "<script>alert('Incorrect Password'); window.location.href='home.php';</script>";
        
    }
}   else {
      // Username not found
      echo "<script>alert('Username not found'); window.location.href='home.php'</script>";
}

    // Close the connection
    $conn->close();
}
?>