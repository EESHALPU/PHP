<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbn = "cap777teacher";
// Create SQLconnection
$conn = new mysqli($servername, $username, $password, $dbn);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// sql to create table
$sql = "CREATE TABLE scateacher(
tid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tname VARCHAR(30) NOT NULL,
tdept VARCHAR(30) NOT NULL,
tphoneno INT(6),
temail VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
echo "Table School of Computer Applications Teacher Table created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>