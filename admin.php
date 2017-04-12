<?php
session_start();
$uid = 'admin';
if($_SESSION['uid']!=$uid){
		
		echo '<script language="javascript">';
	echo 'alert("Please login in as admin!!")';
	echo '</script>';
}
else{	
	

$conn=mysqli_connect('localhost','root','','finalformmysql');

if(!$conn){
	die("Connection fsailed: ".mysqli_connect_error());
}



$sql = "SELECT * from userinfo";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
	echo "<div class='comment_box'>";
	echo $row['uid']."<br>";
	echo $row['pwd']."<br><br><br>";
	echo"</div>";
	}
}