<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Empty password for XAMPP
$dbname = "kontakt";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
