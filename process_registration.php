<?php
// Process_registration.php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paramount_home";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$device = $_POST['device'];
// $VIN = $_POST['VIN'];
// $IMEI = $_POST['IMEI'];
$address = $_POST['address'];

// Add the user icon
$icon = "user.png";

// Perform form validation and other necessary tasks
// ...

// Store form data in the database
$sql = "INSERT INTO users (name, email, password, address, device, icon)
        VALUES ('$username', '$email', '$password', '$address', '$device', '$icon')";

if ($conn->query($sql) === TRUE) {
    // Registration successful
    echo "Registration successful.";

    // Redirect to the dashboard page after signup
    header("Location: Dashboard.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>