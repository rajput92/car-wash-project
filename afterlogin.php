<?php


session_start();
	
include 'dbConfig.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM userinfo WHERE uid='$uid' AND pwd='$pwd'";
$result=mysqli_query($conn,$sql);

if(!$row=$result->fetch_assoc()) {
	echo '<script language="javascript">';
	echo 'alert("You have entered wrong User ID or Password")';
	echo '</script>';
	
} else{
	$_SESSION['uid'] = $row['uid'];
	header("Location: Fundraiser.php");
	
}


