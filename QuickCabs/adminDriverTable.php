<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Drivers Table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <style>
    body {
        background-color: #f2f2f2;
    }

    .table-container {
        width: 80%;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: #f9f9f9;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ccc;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    /* Responsive styles */
    @media screen and (max-width: 600px) {
        /* Adjust table layout for smaller screens */
        table {
            border: 0;
        }

        table thead {
            display: none;
        }

        table tbody,
        table tr {
            display: flex;
            flex-direction: column;
            border-bottom: 2px solid #ccc;
            margin-bottom: 10px;
        }

        table td {
            border-bottom: none;
            text-align: right;
        }

        table td:before {
            content: attr(data-label);
            font-weight: bold;
            text-transform: uppercase;
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

        <li><a href="success.php">Admin</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
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
    </div>
    <br><br>
<div class="table-container">
    <h1>Admin Driver Table</h1>
<?php

$conn = new mysqli('localhost','root','','cab service data');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["delete_user"])) {
        $userid = $_POST["delete_user"];
        $delete_sql = "DELETE FROM drivers WHERE userid = $userid";
        if ($conn->query($delete_sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_user"])) {
        $userid = $_POST["edit_user"];
        $edit_sql = "SELECT * FROM drivers WHERE userid = $userid";
        $result = $conn->query($edit_sql);

if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        $field1name = $row["firstName"];
        $field2name = $row["lastName"];
        $field3name = $row["gender"];
        $field4name = $row["email"]; 
        $field5name = $row["username2"]; 
        $field6name = $row["password2"];
        $field7name = $row["number"]; 
        $field8name = $row["nic"];
        $field9name = $row["vehicleType"];
        $field10name = $row["lisensePlate"];
        $field11name = $row["Area"];


echo '<form method="post" action="updateDriver.php">';
            echo '<input type="hidden" name="userid" value="' . $userid . '">';
            echo 'First Name:<br><input type="text" name="firstName" placeholder="First Name" value="' . $field1name . '"><br>';
            echo 'Last Name:<br><input type="text" name="lastName" placeholder="Last Name" value="' . $field2name . '"><br>';
            echo 'Gender:<br><input type="text" name="gender" placeholder="Gender" value="' . $field3name . '"><br>';
            echo 'Email:<br><input type="text" name="email" placeholder="Email" value="' . $field4name . '"><br>';
            echo 'Username:<br><input type="text" name="username2" placeholder="Username" value="' . $field5name . '"><br>';
            echo 'Password:<br><input type="text" name="password2" placeholder="Password" value="' . $field6name . '"><br>';
            echo 'Phone Number:<br><input type="text" name="number" placeholder="Phone Number" value="' . $field7name . '"><br>';
            echo 'NIC:<br><input type="text" name="nic" placeholder="NIC" value="' . $field8name . '"><br>';
            echo 'Vehicle Type:<br><input type="text" name="vehicleType" placeholder="Vehicle Type" value="' . $field9name .'"> <br>';
            echo 'License Plate Number:<br><input type="text" name="lisensePlate" placeholder="License Plate Number" value="' . $field10name .'"><br>';
            echo 'Usual Area:<br><input type="text" name="Area" placeholder="Usual Area" value="' . $field11name . '"><br>';
            echo '<input type="submit" name="update_user" value="Update">';
            echo '</form>';

            } else {
            echo "Error: User not found.";
        }
    }
    ?>

<?php
    $sql = "SELECT * FROM drivers ";
    echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr>
          <td> First Name </td> 
          <td> Last Name </td> 
          <td> Gender </td> 
          <td> Email </td> 
          <td> Username</td>
          <td> Password</td>
          <td> Number</td> 
          <td> NIC </td> 
          <td> Vehicle Type </td>
          <td> License Plate Number </td>
          <td> Usual Area </td> 
          <td> Edit </td> 
          <td> Delete </td> 
      </tr>';


    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
        $field1name = $row["firstName"];
        $field2name = $row["lastName"];
        $field3name = $row["gender"];
        $field4name = $row["email"]; 
        $field5name = $row["username2"]; 
        $field6name = $row["password2"];
        $field7name = $row["number"]; 
        $field8name = $row["nic"];
        $field9name = $row["vehicleType"];
        $field10name = $row["lisensePlate"];
        $field11name = $row["Area"];
        $userid = $row["userid"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td>'.$field9name.'</td>
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td>
                  <td>
                  <form method="post">
                              <input type="hidden" name="edit_user" value="' . $userid . '">
                              <input type="submit" value="Edit">
                          </form>
                      </td>
                      <td>
                          <form method="post">
                              <input type="hidden" name="delete_user" value="' . $userid . '">
                              <input type="submit" value="Delete">
                          </form>
                      </td>
                  </tr>';
        }
        $result->free();
    }
    echo '</table>';
    ?>

    </div>  
</body>

</html>
