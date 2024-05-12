<?php
// Retrieve comment from POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST["comment"];

    // Validate and sanitize comment if needed

    // Store comment in the database or perform other actions
    // Example code to store comment in a database table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ScheduleRamadan";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO comments (comment) VALUES ('$comment')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Comment submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
