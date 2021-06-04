<?php

include('connection.php');

if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))
{
$Name = $_POST['name'];
$Email = $_POST['email'];
$Message = $_POST['message'];

$sql = "INSERT INTO contact_form(Name,Email,Message) VALUES('$Name','$Email','$Message')";

if(mysqli_query($conn,$sql))
{
	echo"We recived you message";
}
else
{
	echo"Cannot recived your message";
}
}

?>