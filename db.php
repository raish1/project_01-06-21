<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "application_1";
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die('connection faild'.
	     $conn->connect_error);
}
?>