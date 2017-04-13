<?php
include 'comments.php';
session_start();
if($_SESSION['uid']!='admin'){
		
		echo '<script language="javascript">';
	echo 'alert("Please login in as admin!!")';
	echo '</script>';
	header("Location: login.php");
}
else{	
	

$conn=mysqli_connect('localhost','root','','finalformmysql');

if(!$conn){
	die("Connection fsailed: ".mysqli_connect_error());
}



	$sql = "SELECT * from userinfo";
	$result=mysqli_query($conn,$sql);
	echo "<table style='border: 1px solid black;'>";
	echo "<tr style='border: 1px solid black;'>";
	echo "<td style='border: 1px solid black;'>";echo "User ID";echo"</td>";
	 echo "<td style='border: 1px solid black;'>";echo "Password";echo"</td>";
	  echo "</tr>";
	while($row=mysqli_fetch_assoc($result)){
	echo "<div class='comment_box'>";
	 
	echo "<tr style='border: 1px solid black;'>";
	 echo "<td style='border: 1px solid black;'>";echo $row['uid'];echo"</td>";
	 echo "<td style='border: 1px solid black;'>";echo $row['pwd'];echo"</td>";
	 echo "</tr>";
	  
	echo"</div>";
	}
	echo "</table>";
	echo "<form method='POST' action='retriveForm.php'>
	<input type='text' name='uidR' placeholder='Username' required>
	<button type='submit' name='formRetrive' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>Please Enter UID</button>
	</form>";
	
}
