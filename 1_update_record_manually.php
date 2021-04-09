<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="mca";

$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<form method="post" action="">
<?php
$cmd="select sid from d1909";
$result=mysqli_query($conn,$cmd);
echo"Student sid:";
echo"<select name='sid' style='color:red;'>";
while($row=mysqli_fetch_array($result))
{
echo "<option value'".$row['sid']."'>".$row['sid']."</option>";
}
echo"</select>";
echo"<br>";
?>
Student Name:<input type="text" name="sname" sid="sname"><br>

Course Fee:
<input type="text" name="sfee" sid="sfee"><br>

<input type="submit" name="update" value="Update"/>
</form>
<?php
if(isset($_POST["update"]))
{
$name=$_POST["sname"];
$fee=$_POST["sfee"];
$id=$_POST["sid"];
$sql="UPDATE d1909 SET sname='$sname',fee='$sfee' WHERE sid=$sid";
if(!mysqli_query($conn,$sql))
{
echo"Something went wrong";
}
else
{
echo"Data updated Successfully";
}
}
?>