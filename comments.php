<style>
.comment_box {
	width:100%;
	padding:20px;
	margin-bottom:4px;
	
	border-radius:4px;
	
}
</style>

<?php

function setComment($conn){
	if(isset($_POST['commentSubmit'])){
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];
		$sql = "INSERT INTO comments (uid, date,message) 
		VALUES ('$uid', '$date', '$message')";
		$result=mysqli_query($conn,$sql);
	}
}
	
function getComments($conn){
	$sql = "SELECT * from comments";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
	echo "<div class='comment_box'>";
	echo $row['uid']."<br>";
	echo $row['date']."<br>";
	echo $row['message'];
	echo"</div>";
	}

}