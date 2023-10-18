<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submissions
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Establish a database connection
    $conn = new mysqli("localhost", "your_username", "your_password", "your_database");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO form_data (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle cases where the form was not submitted
    echo "Form not submitted.";
}
?>