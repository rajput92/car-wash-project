<?php

	
include 'dbConfig.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


	$sql = "SELECT * from userinfo where uid='$uid'";
	$result=mysqli_query($conn,$sql);
	if ($result && mysqli_num_rows($result) == 1){
	echo '<script language="javascript">';
	echo 'alert("User already exists!!! Please go to Login page to login!!")';
	echo '</script>';
	
}
else{

$sql = "INSERT INTO `userinfo` (`first`, `last`, `uid`, `pwd`)
VALUES ('$first', '$last', '$uid', '$pwd')";

$result = $conn->query($sql);

echo '<script language="javascript">';
	echo 'alert("You have successfully Signed Up!!! Please go to Login page to login!!")';
	echo '</script>';

}