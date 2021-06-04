<?php

include('connection.php');

if(isset($_POST['username'])&&isset($_POST['pass']))
{
$Username = $_POST['username'];
$Password = $_POST['pass'];

$sql = "INSERT INTO doctor_login(Username,Password) VALUES('$Username','$Password')";

if(mysqli_query($conn,$sql))
{
	echo"You are successfully loged in!";
}
else
{
	echo"Cannot loged in";
}
}

?>