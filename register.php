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
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid Request!";
}
?>
// 
// include('connect.php');
// 
// 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if (isset($_POST['signUp'])){
        // $reg_name = $_POST['reg-name'];
        // $reg_email = $_POST['reg-email'];
        // $reg_password= $_POST['reg-password'];
        // $reg_password = password_haSH($reg_password,PASSWORD_BCRYPT);
// 
            // $checkEmail="SELECT * FROM users where Useremail='$reg_email'";
            // $result=$conn->query($checkEmail);
            // if($result->num_rows>0){
                // echo "email alredy exists";
            // }    
            // else{
                // $insertQuery = "INSERT INTO users (Username,Useremail,Password) VALUES ('$reg_name', '$reg_email','$reg_password')";
                // if($conn->query($insertQuery)==TRUE){
                    // header("Location: index.php");
                // } 
                // else {
                // echo "Error: " . $conn->error;
                // }
// 
            // }
    // }
// }
// 
// if($_SERVER['REQUEST_METHOD']=='POSt'){
    // if(isset($_POST['signIn'])){
        // $reg_email = $_POST['reg-email'];
        // $reg_password= $_POST['reg-password'];
        // $reg_password = password_haSH($reg_password,PASSWORD_BCRYPT);
// 
        // $sql="SELECT * FROM users WHERE reg_email='$reg_email' and reg_password='$reg_password'";
        // $result=$conn->query($sql);
        // if($result->num_rows>0){
            // session_start();
            // $row=$result->fetch_assoc();
            // $_SESSION['reg_email']=$row['reg_email'];
            // header("Location: index.php");
            // include "index.php";
            // echo "<script>window.location.replace('index.php'); </script>";
    // 
            // exit();
        // }
        // else{
            // echo "Not Found, Incorrect Email or Password";
        // }
    // }
// }
// ?> 