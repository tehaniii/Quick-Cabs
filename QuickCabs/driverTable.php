<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers Table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <style>
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; 
            
        }

        body {
    background-color: #fff;

}
.styled-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}

.styled-table td, .styled-table th {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

.styled-table th {
    background-color: #f2f2f2;
}
.styled-table tr:hover {
    background-color: #ddd;
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
    </div>
    <h1><center>Available Drivers</center></h1>
    <br><br><br>
    <div class="table-container">
    <?php

    $conn = new mysqli('localhost','root','','cab service data');


    $sql = "SELECT * FROM drivers ";
    echo '<form method="post">';
    echo '<table class="styled-table">';
    echo '<thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Gender</th>
              <th> Username</td>

              <th>Number</th>
              <th>Vehicle Type</th>
              <th>License Plate Number</th>
              <th>Usual Area</th>
            </tr>
          </thead>';

    if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["firstName"];
        $field2name = $row["lastName"];
        $field3name = $row["gender"];
 
        $field4name = $row["username2"]; 

        $field5name = $row["number"]; 

        $field6name = $row["vehicleType"];
        $field7name = $row["lisensePlate"];
        $field8name = $row["Area"];



        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
           
    
              </tr>';
        }
        $result->free();
    } 
    echo '</table>';
    echo '</form>'; // Close the form

    ?>
    </div>

    
     
</body>

</html>
