<!DOCTYPE html>
<html>
<head>
<title>QuickCabs get a taxi</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<style>
    body{
        background-color:#f2f2f2;
    }
    .form{
    width: 250px;
    height: 450px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -50px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 15px;
    padding: 25px;
}
    .form_2{
    width: 570px;
    height: 750px;
    background: linear-gradient(to top, rgba(0,0,0,0.25)50%,rgba(0,0,0,0.25)50%);
    top: -20px;
    margin-top: 10%;
    margin-left: 3%;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 15px;
    padding: 25px;
} 
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
    color:black;
}
.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}
.content span{
    color: #f99d1c;
    font-size: 65px
}
.img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 5%;
}
ul{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
}

li{
    float: left;
}

ul li{
    list-style: none;
    margin-left: 67px;
    margin-top: 27px;
    font-size:15px;
}



ul li a:hover{
    color: #f99d1c;
}
.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content span{
    color: #f99d1c;
    font-size: 65px
}
.img_2{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 30%;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container_img:hover .img_2 {
  opacity: 0.3;
}

.container_img:hover .middle {
  opacity: 1;
}
.text {
  background-color: #f99d1c;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #F12D2D;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #F12D2D;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
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

	<div class="content"> 
		 <div class="form_2" >
 		<form action="#" method="post" id="calculator-form" name="gettaxi_2_form">
                    <center><h2>Available Vehicles</h2><br></center>
	<div class="navbar_2">
		<div class="menu">
                <ul>
			<li><a href="getTaxi1.php">Route</a></li>
			<li><a href="getTaxi2.php">Car type</a></li>
		</ul>
	    </div>
	</div><br><br>
<form>
        <!-- Image options with hourly rates -->
        <label>
            <input type="radio" name="rate" value="3500"> 
	    <div class="container_img">
            <img class=img_2 src="image/car.png" alt="Rate 1">
            <div class="middle" >
    	    <div class="text">Rs.3500/= per hour</div>
  		</div>
	    </div>
        </label>

        <label>
            <input type="radio" name="rate" value="1000"> 
	    <div class="container_img">
            <img class=img_2 src="image/3wheel.png" alt="Rate 2">
  	    <div class="middle" style="top: 55%;">
    	    <div class="text">Rs.1000/= per hour</div>
  		</div>
	    </div>
        </label>

        <label>
            <input type="radio" name="rate" value="500">
	    <div class="container_img">
            <img class=img_2 src="image/bike.png" alt="Rate 3">
  	    <div class="middle" style="top: 80%;">
    	    <div class="text"> Rs.500/= per hour</div>
  		</div>
	    </div>
        </label><br>
</form>

        <!-- Calculate button -->
        <input type="button" value="Calculate Price" onclick="calculatePrice()" style="background-color:white;
  border: none;
  color: #F12D2D;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)">

	<h2>Selected Date and Time</h2>
        <p>Start Date/Time: <?php echo $_GET['PickupDateTime']; ?></p>
        <p>End Date/Time: <?php echo $_GET['ReturnDateTime']; ?></p>

        <!-- Display the calculated price -->
        <div class="p1" id="totalPrice" style ="color: black;">Total price = </div>
 
                    <center><button class="btnn" onClick="clickButton()" id="submitButton">Confirm your ride</button><center>  
               </div> 


        </div>


    <script>
	function clickButton(){
	alert("Thank you! Your ride details has been successfully submitted.").style.color="#f99d1c";
	}

        function calculatePrice() {
            var PickupDateTime = new Date("<?php echo $_GET['PickupDateTime']; ?>");
            var ReturnTime = new Date("<?php echo $_GET['ReturnDateTime']; ?>");
            var hourlyRate = document.querySelector('input[name="rate"]:checked').value;

            var duration = (ReturnTime - PickupDateTime) / 1000 / 60 / 60; // Convert milliseconds to hours
            var totalPrice = hourlyRate * duration;

            if (!isNaN(totalPrice)) {
                document.getElementById('totalPrice').innerHTML = 'Total Price: Rs.' + totalPrice.toFixed(2);
            } else {
                document.getElementById('totalPrice').innerHTML = 'Please enter valid hourly rate.';
            }
        }



    </script>
</body>
</html>