<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Market Packages</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<style>
    
 body{
        margin: 0;
        background-color: #f2f2f2;
    }
   
    h1 {
    text-align: center;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

select {
    width: 100%;
    padding: 10px;
}
/*Form*/
 form {
    width: 70%; 
    margin: 0 auto; 
}  
input[type="submit"] {
    width: 100%;
    padding: 10px;
box-sizing: border-box;
    background-color: #007bff;
    color: #fff;
    border: none;
margin-bottom: 10px;
    cursor: pointer;
       width: 200px; 
}


.packages{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.package {
    margin: 0 auto;
    width: calc(33.33% - 20px);
    margin: 10px;
    border-radius: 5px;
    background-color: #d9d2d2;
    box-sizing: border-box;
    border: 1px solid #ccc; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: background-color 0.3s, border-color 0.3s;
}
.package:hover {
    background-color: #fff;
    color: #f12d2d; 
    border-color: #f12d2d;
}
h3, h2 {
    margin-top: 0;
    margin-bottom: 10px;
    text-align: center;
}
.package h3 {
    margin-top: 0;
    margin-bottom: 10px;
}

.package p {
    margin: 0;
    margin-bottom: 10px;
}

.package img {
    width: 100%; /*  image then fills its container */
  
}
.promotion-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

/* Responsive Navigation */
@media screen and (max-width: 768px) {
 

    label,
    select,
    input[type="submit"] {
        width: 100%; /* mmakes input fields and submit button fill the width of the form */
    }
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
            <a href="#">Help ▾</a>
            <ul class="dropdown-menu">
                <li><a href="help.php">Help Center</a></li>
                <li><a href="taxiTips.php">Helpful Taxi Tips</a></li>
            </ul>
        </li>
    </ul>
</nav>
    </header>
  
    <h1>Market Packages</h1>
    <div class="packages-container">
<?php
$vehicleTypes = array("Car", "Van", "Bus");
$acOptions = array("AC", "Non-AC");
$driverOptions = array("With Driver", "Without Driver");
$distanceOptions = array("Short Distance", "Medium Distance", "Long Distance");

// Checking if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected settings
    $selectedVehicleType = $_POST["vehicleType"];
    $selectedACOption = $_POST["acOption"];
    $selectedDriverOption = $_POST["driverOption"];
    $selectedDistanceOption = $_POST["distanceOption"];


    echo "<h2>Packages:</h2>";
    echo "<div class='packages'>";

    echo "<div class='package'>";
    echo "<h3>Standard Package</h3>";
    echo "<p>Description: The Standard Package offers a comfortable ride with basic amenities. </p>";
    echo "<p>Price: LKR 1000- LKR 3,000</p>";
    echo "<p>Vehicle Type: $selectedVehicleType</p>";
    echo "<p>AC Option: $selectedACOption</p>";
    echo "<p>Driver Option: $selectedDriverOption</p>";
    echo "<p>Distance Option: $selectedDistanceOption</p>";
    echo "</div>";

    echo "<div class='package'>";
    echo "<h3>Premium Package</h3>";
    echo "<p>Description:  Upgrade to the Premium Package for added luxury and convenience. Enjoy enhanced features and services for a more enjoyable journey.</p>";
    echo "<p>Price: LKR 3000- LKR 5,000</p>";
    echo "<p>Vehicle Type: $selectedVehicleType</p>";
    echo "<p>AC Option: $selectedACOption</p>";
    echo "<p>Driver Option: $selectedDriverOption</p>";
    echo "<p>Distance Option: $selectedDistanceOption</p>";
    echo "</div>";

    echo "<div class='package'>";
    echo "<h3>Deluxe Package</h3>";
    echo "<p>Description: Experience the ultimate in luxury and comfort with our Deluxe Package. Indulge in top-of-the-line amenities and personalized service for an unforgettable travel experience.</p>";
    echo "<p>Price: LKR 6000- LKR 7,500</p>";
    echo "<p>Vehicle Type: $selectedVehicleType</p>";
    echo "<p>AC Option: $selectedACOption</p>";
    echo "<p>Driver Option: $selectedDriverOption</p>";
    echo "<p>Distance Option: $selectedDistanceOption</p>";
    echo "</div>";
    
    echo "</div>";
}
?>
</div>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="vehicleType">Vehicle Type:</label>
    <select name="vehicleType">
        <?php foreach ($vehicleTypes as $type) : ?>
            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="acOption">AC Option:</label>
    <select name="acOption">
        <?php foreach ($acOptions as $option) : ?>
            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="driverOption">Driver Option:</label>
    <select name="driverOption">
        <?php foreach ($driverOptions as $option) : ?>
            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="distanceOption">Distance Option:</label>
    <select name="distanceOption">
        <?php foreach ($distanceOptions as $option) : ?>
            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
<br>
<section class="promotions">
    <h2>Promotions</h2>
    <div class="promotion-container">
        <div class="package">
            <img src="image/firstride.png" alt="Special Discount for New Customers">
            <h3>Special Discount for New Customers</h3>
            <p>Get 10% off on your first ride with QuickCabs. Book now and experience premium taxi services at discounted rates!</p>
        </div>
        <div class="package">
            <img src="image/weekend.png" alt="Weekend Getaway Offer">
            <h3>Weekend Getaway Offer</h3>
            <p>Planning a weekend trip? Enjoy special discounts on weekend bookings with QuickCabs. Book now and save!</p>
        </div>
        <div class="package">
            <img src="image/freeride.jpg" alt="Weekend Getaway Offer">
            <h3>Share your discount code with 3 friends and get a free ride!</h3>
            <p>Planning a weekend trip? Enjoy special discounts on weekend bookings with QuickCabs. Book now and save!</p>
        </div>
    </div>
</section>
</body>
</html>
