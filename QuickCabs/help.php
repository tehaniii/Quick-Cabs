<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <style>
        body{
            background-color: #f2f2f2;
        }
        .section li {
            background-color:white;
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

<h1 class="header-title">Cab Service Help Center</h1>
    
    

    <section id="booking" class="section">
        <h2>Booking a Ride</h2>
        <p>If you need help with booking a ride, follow these steps:</p>
        <ol>
            <li>Log in to your account or if you are new sign in by filling the form.</li>
            <li>Give a call to the driver according to your preference.</li>
            <li>Your payment is proceed after your ride is completed.</li>
            <li>Enjoy your ride!</li>
        </ol>
    </section>

    <section id="faqs" class="section">
        <h2>Frequently Asked Questions</h2>
        <p>Explore some common questions and their answers:</p>
        <ul>
            <li><strong>Q: How do I contact my driver?</strong><br>A: You can contact your driver via call.</li>
            <li><strong>Q: What if my driver is late?</strong><br>A: Please wait for your driver. If they're significantly late, you can contact us for assistance.</li>
        </ul>
    </section>

    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <p>If you still have questions or need assistance, please don't hesitate to reach out:</p>
        <ul>
            <li>Email: <a href="mailto:support@cabservice.com">support@cabservice.com</a></li>
            <li>Phone: +94719358126</li>
        </ul>
    </section>

    <section id="lost-and-found" class="section">
        <h2>Lost and Found</h2>
        <p>If you've left something in one of our cabs, follow these steps to retrieve it:</p>
        <ol>
            <li>Contact our Lost and Found department at <a href="mailto:lostfound@cabservice.com">lostfound@cabservice.com</a>.</li>
            <li>Provide details about your lost item and the ride you were on.</li>
            <li>We'll do our best to help you recover your lost belongings.</li>
        </ol>
    </section>

    <section id="safety" class="section">
        <h2>Safety Tips</h2>
        <p>Your safety is important to us. Here are some safety tips to keep in mind:</p>
        <ul>
            <li>Always verify the driver's identity and the vehicle before getting in.</li>
            <li>Share your ride details with a friend or family member.</li>
            <li>Use the in-app tracking features to monitor your ride.</li>
            <li>Trust your instincts and report any suspicious activity.</li>
        </ul>
    </section>  

</body>


</html>
