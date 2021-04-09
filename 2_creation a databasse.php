<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// To Check database connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create Employees Database
$sql = "CREATE DATABASE cap777teacher";

if ($conn->query($sql) === TRUE) {
echo "cap777teacher Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

