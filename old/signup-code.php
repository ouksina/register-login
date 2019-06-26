<?php

require_once ('conection.php');
if(isset($_POST['sign-up'])) {
    if (empty($_POST['first name']) || empty($_POST['last name']) || empty($_POST['gender']) ||empty($_POST['email']) || empty($_POST['password'])) {
        header("location:signup.php?empty");
    }
}
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['first name'];
$lname = $_POST['last name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];


$sql = "INSERT INTO register (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$pwd')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location:log.php");
}
?>
