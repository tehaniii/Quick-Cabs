<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="style.css">
  
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo"><img src="./image/logo.png" alt="logo"></div>
            
            <ul class="nav-links">
                <li><a href="adminLogin.php" id="login">Admin Login</a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="help.php" id="Help">Help</a></li>
            </ul>
        </nav>
    </header>
    
    </div>
<div class="background"></div>
    <div class="container">
        <div class="login-container" id="login-container1">
            <div class="login-box">
                <img src="./image/1.png" alt="logo" height="100px" width="100px" class="login-logo">
                <h2>User Login</h2>
                <form action="customerLogin.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
                </form>

                
            </div>
        </div>
</div>

<?php
$conn = new mysqli('localhost', 'root', '', 'cab service data');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];

   

    

    // SQL query to check if the username and password match in the users table
    $sql = "SELECT * FROM customers WHERE username1='$username1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // User found, verify the password
    $row = $result->fetch_assoc();
    // Compare the entered password 
    if ($password1==$row['password1']) {
        // Password is correct, log in the user 
        echo "Login successful! Redirect to homepage...";
        // Redirect to your homepage
        header("Location: driverTable.php");
        exit();
    } else {
        // Password is incorrect
        echo "<script>alert('Incorrect Password'); </script>";
    }
}   else {
      // Username not found
      echo "<script>alert('Username not found'); </script>";
}

    // Close the connection
    $conn->close();
}
?>

</body>

</html>
