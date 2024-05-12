<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are filled
    if(isset($_POST['day']) && isset($_POST['hour']) && isset($_POST['task']) && isset($_POST['email'])) {
        // Retrieve form data
        $day = $_POST['day'];
        $hour = $_POST['hour'];
        $task = $_POST['task'];
        $email = $_POST['email'];

        // Prepare email message
        $to = 'recipient@example.com'; // Change this to your recipient email address
        $subject = 'New Schedule Submission';
        $message = "
        <html>
        <head>
          <title>New Schedule Submission</title>
          <style>
            table {
              border-collapse: collapse;
              width: 100%;
            }
            th, td {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            th {
              background-color: #f2f2f2;
            }
          </style>
        </head>
        <body>
        <h2>New Schedule Submission</h2>
        <table>
          <thead>
            <tr>
              <th>Day</th>
              <th>Hour</th>
              <th>Task</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>$day</td>
              <td>$hour</td>
              <td>$task</td>
            </tr>
          </tbody>
        </table>
        </body>
        </html>
        ";

        // Set additional headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $email" . "\r\n";

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "New record created successfully and email sent.";
        } else {
            echo "New record created successfully but failed to send email.";
        }
    } else {
        echo "Please fill in all the fields.";
    }
} else {
    echo "Form submission method not valid.";
}

?>
