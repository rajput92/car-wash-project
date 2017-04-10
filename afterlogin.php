<?php

include 'dbConfig.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM userinfo WHERE uid='$uid' AND pwd='$pwd';
$result = conn->query($sql);

if(!$row=$result->fetch_assoc()) {
	echo " Your username password is incorrect";
} else{
	echo " You are logged in!!";
}


//header("Location: login.php");