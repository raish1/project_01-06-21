<?php
include_once"db.php";
if(!isset($_POST['submit'])){
	//$user_id=$_GET['user_id'];
	$user_id = $_POST['id'];
	$sql = "Delete FROM user Where id='$user_id'";
	if(mysqli_query($conn,$sql)){
		echo "success";
		//header("location: admin_profile.php");
	}else{
		echo "delete edting record".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>