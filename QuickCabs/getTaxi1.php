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
        .user_detail{
            display:flex;
            flex-direction: column;
        align-items: center;
        }
        .form_2{
            max-width: 800px; /* Increased max-width for a larger form */
            width: 90%;
            height: auto;
            background: linear-gradient(to top, rgba(0,0,0,0.25)50%,rgba(0,0,0,0.25)50%);
            margin: 10% auto;
            border-radius: 15px;
            padding: 25px;
            overflow: hidden; /* Added overflow hidden */
        }
        select, input[type="text"], input[type="number"], input[type="datetime-local"] ,input[type="no"]{
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            color:black;
        }
.user_detail{
	display:flex;
	flex-wrap:wrap;
	justify-content:space-between;
	width-calc(100% / 2-20px);
}
select {
     width: 100%;
     padding: 8px;
     margin-bottom: 1px;
     border: 1px solid #ccc;
     border-radius:10px;
     box-sizing: border-box;
     color: black;
        }

        .content{
            display:flex;
            flex-direction: column;
        align-items: center;
        }
        
        button {
            margin: 10px 0;
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 100px;
    background-color: #F12D2D;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
        }
      
        button:hover {
    background-color: #000;
    color: #fff;
}
input{
    font-family: 'Poppins', sans-serif;
    font-size:2px;
    margin: 10px 0;
    width:80%;
    padding: 5px;
    border: 1px solid #333;
    border-radius: 100px;
}
.user-input-box input{
    height: 40px;
    width: 75%;
    border-radius: 7px;
    outline: none;
    color: black;
    text-align: center;
    border: 1px solid grey;
    background: white;
}
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}
.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -50px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 15px;
    padding: 25px;
}

form input{
    width: 240px;
    height: 35px;
    border-bottom: 1px solid #f99d1c;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
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
<br>
    <!-- CONTENT-->
    <div class="content"> 
        <div class="form_2" >
            <form action="getTaxi2.php" method="get" id="gettaxi_1_form">
                <center><h2>Need a taxi?</h2><br></center>
              <br>
                <div class="user_detail">
                    <h4>From: </h4>
                    <select name="fromcity">
                        <option value="Colombo">Colombo</option>
                        <option value="Rathnapura">Rathnapura</option>
                        <option value="Galle">Galle</option>
                        <option value="Kaluthara">Kaluthara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Jaffna">Jaffna</option>
                    </select>
                    <input type="text" name="fromstreet" id="fromstreet" placeholder="Enter the street Here">
                    <input type="no" name="fromno" id="fromno" placeholder="No#" style="width:40px;">
                </div><br><br>
                <div class="user_detail">
                    <h4>To: </h4>
                    <select name="tocity">
                        <option value="Colombo">Colombo</option>
                        <option value="Rathnapura">Rathnapura</option>
                        <option value="Galle">Galle</option>
                        <option value="Kaluthara">Kaluthara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Jaffna">Jaffna</option>
                    </select>
                    <input type="text" name="tostreet" id="tostreet" placeholder="Enter the street Here">
                    <input type="no" name="tono" id="tono" placeholder="No#" style="width:40px;">
                </div><br><br>
                <div class="user_detail">
                    <h4>Pickup date & time</h4>
                    <input type="datetime-local" name="PickupDateTime" required>
                    <h4>Return date & time</h4> 
                    <input type="datetime-local" name="ReturnDateTime" id="ReturnDateTime" required>   
                <br><br>
                <h4>No of passengers</h4>
                <center><input type="number" name="quantity" id="quantity" min="1" max="20" placeholder="01" style="width:70px;"></center>
                <center><button class="btnn" id="submitBtn">Select Vehicle</button></center>
             
            </form>
        </div>
      <br>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the form from submitting by default

            var fromCity = document.getElementsByName('fromcity')[0].value.trim();
            var toCity = document.getElementsByName('tocity')[0].value.trim();
            var pickupDateTime = document.getElementsByName('PickupDateTime')[0].value.trim();
            var returnDateTime = document.getElementsByName('ReturnDateTime')[0].value.trim();

            if (fromCity === '' || toCity === '' || pickupDateTime === '' || returnDateTime === '') {
                alert('Please fill in all required details.');
            } else {
                // If all details are filled, you can submit the form
                document.getElementById('gettaxi_1_form').submit();
            }
        });
    </script>
</body>
</html>
