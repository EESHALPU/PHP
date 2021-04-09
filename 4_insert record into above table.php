<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbn = "cap777teacher";
// Create SQLconnection
$conn = new mysqli($servername, $username, $password, $dbn);
// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO scateacher(tid, tname, tdept, tphoneno, temail)
VALUES (103, 'H.kumar', 'aerospace','', 'gk@gmail.com')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

