<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];


$sql = "INSERT INTO register1 (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$pwd')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location:login.php");
}
else
{
	echo "Error :".$sql;
}
?>