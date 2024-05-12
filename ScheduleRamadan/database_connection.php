<?php
// Replace 'your_username', 'your_password', and 'scheduleramadan' with your actual MySQL credentials and database name
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ScheduleRamadan';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
