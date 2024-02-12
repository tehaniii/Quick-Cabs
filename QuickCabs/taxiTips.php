<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Tips</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<style>
    body{
        background-color:#f2f2f2;
    }
    h1{
        text-align:center;
    }
    .blog-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center items horizontally */
}

.blog-item {
    width: calc(50% - 20px);
    margin: 10px; 
    box-sizing: border-box; 
    display: flex; /* Use flexbox */
    flex-direction: column; 
    justify-content: center; 
    align-items: center;
}
.blog-item img {
    width: 100%; 
    height: auto; 
    max-width: 300px; 
    max-height: 200px; 
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
    <h1>Helpful taxi tips</h1>

    <!--blog item 3-->
    <div class="blog-container">
        <div class="blog-item">
            <img src="image/blogitem1.jpg" alt="Bank Holiday Taxi Fares">
            <h2>Truth Behind Taxi Fares on Bank Holidays</h2>
            <p>Have you ever wondered how taxi fares are calculated? 

It can be a little confusing, but understanding the process can help you avoid getting a shock at the end of the ride. Most taxi fares are calculated using a combination of the following:  

Distance and time: 

The initial fare is for the first few kilometers or minutes of the taxi ride, after which the fare increases with the distance traveled or time expended in the taxi.  

Day or week time (higher fares during rush hour or  weekends):

Some cities also have a minimum fare, which means you have to pay a certain amount extra even for short journeys. Please note that additional costs such as tolls or airport taxes may also be included in the taxi prices.</p>
            <a href="https://www.mylifetaxi.lk/blog/the-truth-behind-taxi-fares-on-bank-holidays">Read More</a>
        </div>
<!--blog item 2-->
        <div class="blog-item">
            <img src="image/blogitem2.jpeg" alt="12 Types of Trucks in Sri Lanka">
            <h2>What payment method do you prefer - cash, card, or app?</h2>
            <p>When it comes to paying for a ride, passengers have a variety of options to choose from. While cash is still the most commonly used payment method, many taxis now accept card payments for bookings.

It is crucial to note that some taxis may charge a fee for using your card. To avoid any unexpected charges, it is advisable to inquire about this beforehand.</p>
<p>Drivers need to have a clear understanding of payment policies to ensure safe and hassle-free driving. 
Whether you opt for cash, card, or app payments, it's crucial to be aware of your rights and responsibilities as a passenger. </p>
            <a href="types_of_trucks_article.php">Read More</a>
        </div>
<!--blog item 3-->
        <div class="blog-item">
            <img src="image/blogitem3.jpg" alt="12 Types of Trucks in Sri Lanka">
            <h2>Maintain a secure travel experience</h2>
            <p>Quick Cabs emphasizes the security of passengers' belongings. Keep your valuables secure during the ride, and don't hesitate to inform the driver if you have any concerns.</p>
<p> Before entering a Quick Cab, passengers should verify that the driver prominently displays their Quick Cabs identification badge. This badge serves as a reassurance of the driver's affiliation with Quick Cabs and their commitment to providing a safe and secure travel experience. </p>
            <a href="https://www.gocomfort.co.uk/heres-what-to-do-if-you-forget-something-in-a-taxi/#:~:text=Call%20the%20Taxi%20Helpline&text=If%20you%20call%20them%20immediately,get%20your%20stuff%20back%20easily.">Read More</a>
        </div>
        <!--blog item 4-->
        <div class="blog-item">
            <img src="image/blogitem4.jpg" alt="12 Types of Trucks in Sri Lanka">
            <h2>Comfort and Convienience</h2>
            <p>Quick Cabs strives to provide a comfortable and convenient travel experience. If you have any special requests or preferences, such as temperature adjustments or music choices, feel free to communicate them to the driver.</p>
<p> Quick Cabs aims to personalize your travel experience to ensure maximum satisfaction during your journey.</p>
            <a href="https://issuu.com/gagan_deep1/docs/what_makes_a_taxi_really_comfortable">Read More</a>
        </div>
    </div>
</body>


</html>
