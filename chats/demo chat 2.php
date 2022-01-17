<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';
?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<div style="margin-top: 100px;">
		<?php
include 'C:\Xampp\htdocs\socio\dbconn\dbconn.php';
#messeg send start here
	if(isset($_POST['submit']))
{
	$message=$_POST['message'];
	 $sender=$_SESSION["email"];
	echo "$message";


$sendm=" INSERT INTO `$receiver` (sender,message) VALUES ('$sender','$message')";
 mysqli_query($db,$sendm);	
} ?>
<form action="chat.php" method="POST">

	<input type="text" name="message" style="width: 1000px;"><br>
	<input type="submit" name="submit">
	</form>
</div>



</div>
</body>
</html>
