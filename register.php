<?php
require 'connect.php'; // include the connection file

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = $conn->real_escape_string($_POST['reg-name']);
    $email = $conn->real_escape_string($_POST['reg-email']);
    $raw_password = $_POST['reg-password'];
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

    // Insert query
    $sql = "INSERT INTO users (Username, Useremail, Password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
        header("Location: index.html");
        include "index.html";
        echo "<script>window.location.replace('index.html'); </script>";
        echo "<script>alert('signup successful');</script>";

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid Request!";
}
?>
