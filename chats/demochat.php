<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';
?>
<!DOCTYPE html<html>>

<head>

	<title></title>
</head>
<body>
	<div style="margin-top: 100px;">
<?php 
	if(isset($_REQUEST['chatid']))
		{
			$receiver=$_REQUEST['chatid'];
			 $sender=$_SESSION["email"];  
		}
?>
<div class="container">
<?php echo "$receiver"; ?> <br>
<hr>
	<?php
	$receiver=$_REQUEST['chatid'];
			 $sender=$_SESSION["email"];  
	include 'C:\Xampp\htdocs\socio\dbconn\dbconn.php';
	$sql="SELECT * FROM `$receiver` where sender=$sender ";
	//$query="SELECT * FROM feeds where iname='$name'";
	echo "receiver is $receiver";
	//echo " receiver is $sender";
	$result=mysqli_query($db,$sql);
		?>
		<?php while($row = mysqli_fetch_array($result)){ ?>
			<strong><h4> <td> <?php echo $row['username'] ?></strong>

		<?php } ?>
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



}








?>
	







































<form action="chat.php" method="POST">

	<input type="text" name="message" style="width: 1000px;"><br>
	<input type="submit" name="submit">
	</form>
</div>



</div>
</body>
</html>