<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Fundraiser.css"/>
</head>
<body>

<form action="afterlogin.php" method="POST">
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type='submit' name='commentSubmit' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>Login</button>
</form>

<?php 

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}
	else{
		echo "you are not logged in";
	}

?>

<br><br>

<form action="signup.php" method="POST">
	<input type="text" name="first" placeholder="Firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type='submit' name='commentSubmit' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>SIGN UP</button>
	
</form>

<br><br><br>



</body>
</html>
	