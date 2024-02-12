<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

  <style>
    body{
        background-color: #333;
    }
     h1 {
        font-size: 2rem;
        margin-bottom: 20px;
        color:white;
        text-align:center;
    }
    p {
        font-size: 1rem;
        margin-bottom: 30px;
    }
   
  </style>
</head>

<body>
    <header>
    <div class="logo">
    <img src="./image/logo.png" alt="logo">
</div>
    <nav>
        <ul class="menu">

        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="adminLogin.php">Logout</a></li>

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
    
    </div>
    <div class="background"></div>
    <h1>Welcome Admin!</h1>
    <div class="container">
        <div class="login-container" id="login-container1">
            <div class="login-box">
                <img src="./image/user.png" alt="logo" height="100px" width="100px" class="login-logo">
                <h2><a href="adminCustomerTable.php">View the customers table</a></h2>
            </div>
        </div>

        <div class="login-container" id="login-container2">
            <div class="login-box">
                <img src="./image/driver.png" alt="logo" height="100px" width="100px" class="login-logo">
                <h2><a href="adminDriverTable.php">View the drivers table</a></h2>
            </div>
        </div>
        
        </div>


   
</body>

</html>
