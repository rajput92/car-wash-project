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
		$uid=$_SESSION['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];
		
		$sql = "INSERT INTO commentsinfo (uid, date,message) 
		VALUES ('$uid', '$date', '$message')";
		$result=mysqli_query($conn,$sql);
	}
}
	
function getComments($conn){
	$sql_comment = "SELECT * from commentsinfo";
	$result=mysqli_query($conn,$sql_comment);
	while($row=mysqli_fetch_assoc($result)){
	echo "<div class='comment_box'>";
	echo $row['uid']."<br>";
	echo $row['date']."<br>";
	echo $row['message'];
	echo"</div>";
	}

}
