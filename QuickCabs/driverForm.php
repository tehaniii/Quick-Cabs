<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Registration</title>
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

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
            <a href="#">Help ▾</a>
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


            <form action="connectionDriver.php" method="post">

                <div class="login-box">
                    <img src="./image/driver.png" alt="logo" height="100px" width="100px" class="login-logo">
                    <h2>Driver Registration</h2>

                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    <input type="text" id="username2" name="username2" placeholder="Username" required>
                    <input type="password" id="password2" name="password2" placeholder="Password" maxlength="20" required>
                    <input 
                         type="password_Conf" 
                         id="password_Conf2" 
                         placeholder="Confirm Password" maxlength="20" required> 
                    <input type="text" id="number" name="number" placeholder="Phone Number"maxlength="20" required>
                    <input type="text" id="nic" name="nic" placeholder="NIC">
                       
                    <label for="vehicleType">Vehicle Type</label>
                    <select id="vehicleType" name="vehicleType">
                        <option value="car">Car</option>
                        <option value="three wheel">Three Wheel</option>
                        <option value="bike">Bike</option>
                    </select>

                    <input 
                        type="text" 
                        id="lisensePlate" name="lisensePlate"
                        placeholder="Lisense Plate Number" required>

                    <input
                        type="text"
                        id="area" name="area"
                        placeholder="Usual Area" required >
                   


                    <button onclick="userlogin()">Login</button>
    
                </div>
            </form>
        </div>
    </div>
      
</body>

</html>
