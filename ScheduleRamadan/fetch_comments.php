<?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "ScheduleRamadan"; 

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select all comments from the comments table
$sql = "SELECT comment FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["comment"] . "</p>";
    }
} else {
    echo "No comments yet.";
}

// Close the database connection
$conn->close();
?>
