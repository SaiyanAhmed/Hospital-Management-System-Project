<?php
$hostname = 'Localhost';
$username = 'root';
$password = '';

$dbname = 'hospital';

$conn=new mysqli ($hostname,$username,$password,$dbname);

if ($conn->connect_error) {
      die("connection failed.".$conn->connect_error);
}
echo "connection successfull";
echo "<br>";
?>