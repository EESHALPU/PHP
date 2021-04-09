<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbn = "mca";
$conn = new mysqli($servername, $username, $password, $dbn);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";
mysqli_select_db($conn, $dbn);
$sql = "UPDATE d1909 SET sid = '104', sname = 'Rakesh Kumar', scourse='Python', sfee = '85000' WHERE sid=109 ";
$query = mysqli_query($conn,$sql);
if(!$query)
{
echo "Query does not work.".mysqli_error($conn);die;
}
else
{
echo "Data successfully updated";
}
?>