<?php
// Replace these values with your actual database credentials
$hostname = 'localhost';
$username = 'apinp';
$password = 'Palm@#056';
$database = 'contact';

// Create a database connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (&conn->connect_error) {
    die("Connection failed: " . &conn->connect_error);
}

if (!$conn->set_charset("utf8mb4")) {
    die("Error setting character set: " . &conn->error);
}
?>

