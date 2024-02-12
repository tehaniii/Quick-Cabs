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
        // Compare the entered password with the hashed password from the database
        if ($password1 == $row['password1']) {
            // Password is correct, log in the user
            // Redirect to your homepage
            header("Location: driverTable.php");
            exit();
        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect Password'); </script>";
        }
    } else {
        // Username not found
        echo "<script>alert('Username not found'); </script>";
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickCabs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
    .home-heading {
        text-align: center;
        position: relative;
        padding: 50px 20px;
        color: #fff;
        background-image: url('image/home2.jpg');
        background-size: cover;
        background-position: center;
    }
    .home-heading h1 {
        font-size: 2rem;
        margin-bottom: 20px;
    }
    .home-heading p {
        font-size: 1rem;
        margin-bottom: 30px;
    }
    .home-heading h2 {
        font-size: 1.5rem;
    }
        
    </style>
</head>

<body>
    
    <header>
    <div class="logo">
    <img src="./image/logo.png" alt="logo">
</div>
    <nav><ul class="menu">

        <li><a href="adminLogin.php">Admin Login</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="getTaxi1.php">Get Taxi</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li class="dropdown">
            <a href="help.php">Help ▾</a>
            <ul class="dropdown-menu">
                <li><a href="help.php">Help Center</a></li>
                <li><a href="taxiTips.php">Helpful Taxi Tips</a></li>
            </ul>
        </li>
    </ul>
</nav>
    </header>
    <div class="home-heading">
<h1>Welcome to Our Taxi Website</h1>
<p>Experience convenience and reliability with our premier taxi service. Whether you're a driver looking for opportunities or a user in need of transportation, we've got you covered. 
    Take the next step by logging in below as either a driver or a user.</p>
<h2>Login as a driver or a user!</h2>

    <div class="container">
    

        <div class="login-container" id="login-container1">
            <div class="login-box">
                <img src="./image/user.png" alt="logo" height="100px" width="100px" class="login-logo">
                <h2>User Login</h2>
                <form action="home.php" method="post">
                    <input type="text" id="username" name="username" placeholder="Username">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
                <p>New to QuickCabs family? <a href="customerForm.php">Register Now</a></p>
            </div>
</div>



        <div class="login-container" id="login-container2">
            <div class="login-box">
                <img src="./image/driver.png" alt="logo" height="100px" width="100px" class="login-logo">
                <h2>Driver Login</h2>
                <form action="driveLogin.php" method="post">
                    <input type="text" id="username" name="username" placeholder="Username">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
                <p>New to QuickCabs family? <a href="driverForm.php">Register Now</a></p>
            </div>
        </div>
</div>
</div>
</body>

</html>

