<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$sql = "SELECT * FROM register1 WHERE Email='$email' AND Password='$pwd'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: welcome.php");
}
else
{
        header("location:login.php?invalid");
}

if(empty($_POST['email']) || empty($_POST['password'])){
    header("location:login.php?empty");

}
?>