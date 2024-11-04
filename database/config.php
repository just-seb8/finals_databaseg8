<?php
// Database connection configuration
$servername = "localhost";
$db_username = "root";      // Your database username
$db_password = "";          // Your database password
$db_name = "login_system";  // Your database name

// Create the connection
$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
