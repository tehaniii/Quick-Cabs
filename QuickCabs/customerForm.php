<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
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
    <div class="background"></div>
    <div class="container">
        <div class="login-container" id="login-container1">


            <form action="connectionCustomer.php" method="post">

                <div class="login-box">
                    <img src="./image/user.png" alt="logo" height="100px" width="100px" class="login-logo">
                    <h2>Customer Registration</h2>
                    
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <input type="text" id="username1" name="username1" placeholder="Username" required>
                    <input type="password" id="password1" name="password1" placeholder="Password" maxlength="20" required>
                    <input 
                         type="password_Conf" 
                         id="password_Conf1" 
                         placeholder="Confirm Password" maxlength="20" required> 
                    <input type="text" id="number" name="number" placeholder="Phone Number"maxlength="20" required>
                    <input type="text" id="nic" name="nic" placeholder="NIC">


                    <button onclick="userlogin()">Login</button>
    
                </div>
            </form>
        </div>
    </div>
     
</body>

</html>
