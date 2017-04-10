<?php
	date_default_timezone_set('IST');
	include 'dbConfig.php';
	include 'comments.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

</head>

<body>

<?php
echo "<form method='POST' action='".setComment($conn)."'>
<input type='hidden' name='uid' value='Anonymus'>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<textarea name='message'></textarea><br>
<button type='submit' name='commentSubmit'>Comments</button>
</form>";

getComments($conn);

?>
</body>
</html>