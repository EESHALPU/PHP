<?php
$host = "localhost";
$user = "root";
$password ="";
$database = "santosh";

$id = "";
$fname = "";
$lname = "";
$age = "";

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
$connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
echo 'Error';
}

// get values from the form
function getPosts()
{
$posts = array();
$posts[0] = $_POST['id'];
$posts[1] = $_POST['fname'];
$posts[2] = $_POST['lname'];
$posts[3] = $_POST['age'];
return $posts;
}

// Search

if(isset($_POST['search']))
{
$data = getPosts();

$search_Query = "SELECT * FROM users WHERE id = $data[0]";




$search_Result = mysqli_query($connect, $search_Query);

if($search_Result)
{
if(mysqli_num_rows($search_Result))
{
while($row = mysqli_fetch_array($search_Result))
{
$id = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$age = $row['age'];
}
}else{
echo 'No Data For This Id';
}
}else{
echo 'Result Error';
}
}

// Delete
if(isset($_POST['delete']))
{
$data = getPosts();
$delete_Query = "DELETE FROM `users` WHERE `id` = $data[0]";
try{
$delete_Result = mysqli_query($connect, $delete_Query);

if($delete_Result)
{
if(mysqli_affected_rows($connect) > 0)
{
echo 'Record Deleted';
}else{
echo 'Record Not Deleted';
}
}
} catch (Exception $ex) {
echo 'Error Delete '.$ex->getMessage();
}
}


// Edit
if(isset($_POST['update']))
{
$data = getPosts();
$update_Query = "UPDATE `users` SET `fname`='$data[1]',`lname`='$data[2]',`age`=$data[3] WHERE `id` = $data[0]";
try{
$update_Result = mysqli_query($connect, $update_Query);

if($update_Result)
{
if(mysqli_affected_rows($connect) > 0)
{
echo 'Data Updated';
}else{
echo 'Data Not Updated';
}
}
} catch (Exception $ex) {
echo 'Error Update '.$ex->getMessage();
}
}
?>
<!DOCTYPE Html>
<html>
<head>
<title> Santosh - Database Connection with all options </title>
</head>
<body>
<form action="" method="post">
<input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
<input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"><br><br>
<input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>"><br><br>
<input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"><br><br>
<div>

<!-- Input For Edit Values -->
<input type="submit" name="update" value="Update">

<!-- Input For Find Values With The given ID -->
<input type="submit" name="search" value="Find">

<!-- Input For Clear Values -->
<input type="submit" name="delete" value="Delete">


</div>
</form>
</body>
</html>