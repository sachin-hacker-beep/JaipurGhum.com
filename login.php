<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            echo "Login successful. Welcome, " . htmlspecialchars($user['Username']) . "!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that email.";
    }

    $conn->close();
}
?>
