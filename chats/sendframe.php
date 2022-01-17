<?php
if(isset($_POST['submit'])){
		$receiver=$_POST['chatid'];
		//echo "$receiver";
		$sender=$_SESSION['email'];
		//echo "$sender";
		$message=$_POST['message'];
		//echo "$message";
	$sql="INSERT INTO `$receiver` (sender,message) VALUES ('$sender','$message')";
	mysqli_query($db,$sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hey
</body>
</html>