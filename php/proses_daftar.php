<?php
// proses_daftar.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the registration form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"]; // Note: In a real-world scenario, you should hash and validate the password securely.

    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ruangngoding";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the 'users' table
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        echo "Registration successful! Redirecting to the login page...";
        // You can redirect the user to the login page after successful registration
        // header("Location: login.php");
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the request method is not POST, redirect to the registration page
    header("Location: daftar.php");
    exit();
}
?>
