<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$matric = $_POST['matric'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE matric='$matric' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['matric'] = $matric;
    header("Location: dashboard.php"); 
} else {
    header("Location: login.php?error=invalid_credentials");
}

$conn->close();
?>