<?php

include('connection.php');

if(isset($_POST['name'])&&isset($_POST['gender'])&&isset($_POST['blood'])&&isset($_POST['bdate'])&&isset($_POST['contact'])&&isset($_POST['date'])&&isset($_POST['time'])&&isset($_POST['symptoms']))
{
$Name = $_POST['name'];
$Gender = $_POST['gender'];
$Blood = $_POST['blood'];
$Bdate = $_POST['bdate'];
$Phone = $_POST['contact'];
$Adate = $_POST['date'];
$Atime = $_POST['time'];
$Symptoms = $_POST['symptoms'];

$sql = "INSERT INTO patient_appointment_list(Name,Gender,Blood,Bdate,Phone,Adate,Atime,Symptoms) VALUES('$Name','$Gender','$Blood','$Bdate','$Phone','$Adate','$Atime','$Symptoms')";

if(mysqli_query($conn,$sql))
{
	echo"Your Appointment Created Sucessfully";
}
else
{
	echo"Your Appointment Not Created";
}
}

?>