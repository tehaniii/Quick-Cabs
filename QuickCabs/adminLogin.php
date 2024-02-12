<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <style>
        body {
    background-color: #fff;

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
        <li><a href="adminLogin.php">Home</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
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
    <div class="background"></div>
    <div class="container">
        <div class="login-container" id="login-container1">
            <div class="login-box">
                <img src="./image/admin.png" alt="logo" height="100px" width="100px" class="login-logo">
                <h2>Admin Login</h2>
                <form method="post" action="adminLogin.php">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" maxlength="20" required>
                    <button type="submit">Login</button>
                </form>
                <?php
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Check if the provided username and password are correct
                    if ($username === "uoc" && $password === "uoc") {
                        // Redirect to another web page (e.g., success.php)
                        header('Location: success.php');
                        exit();
                    } else {
                        // Display an error message
                        echo "Invalid username or password.";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>
