<?php
session_start();
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize input data
$email = $conn->real_escape_string($_POST['email']);
$password = $_POST['password'];

// Retrieve user from database
$sql = "SELECT * FROM `login` WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Start session and set session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        include 'status.php';
        include 'contactstatus.php';
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that email.";
}

$conn->close();
?>