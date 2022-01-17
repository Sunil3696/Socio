<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';
?>
<?php
session_start();
$receiver=$_REQUEST['chatid'];
		//echo "$receiver";
		$sender=$_SESSION['email'];
		//echo "$sender";
include 'C:\Xampp\htdocs\socio\dbconn\dbconn.php';
if(!isset($_SESSION['email']))
 {
 header('location:/socio/Login/login.php');

}
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
<?php
$receiver=$_REQUEST['chatid'];

$page = '#';
$sec = "25";
?>
<html>
<head>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<title>Chat</title>
	<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
	<div style="margin-top: 50px;"> 
	<?php
		$receiver=$_REQUEST['chatid'];?>
		<strong><h3><div class="stkname"> 
		<?php echo "Chatting with  $receiver"; ?> </strong></h1></div>
		
	
	<?php
	$receiver=$_REQUEST['chatid'];
	$sender=$_SESSION['email'];
	$sqll="SELECT * FROM `$receiver` WHERE sender='$sender'";
	
	$result=mysqli_query($db,$sqll); ?>
	
	<?php while($row = mysqli_fetch_array($result)){ ?>
		<div style="margin-left: 200px;">
	<i>	<?php echo $row['sender']; ?> :: &nbsp&nbsp&nbsp&nbsp 	</i><strong> 	<?php echo $row['message'] ?> </strong><br>
		<div class="text-muted"><?php echo $row['rtime'] ?></div>
	 </div>
<?php	 }?>
<?php
		$receiver=$_REQUEST['chatid'];
		//echo "Chatting with  $receiver";
	?>
	<?php
	$receiver=$_REQUEST['chatid'];
	$sender=$_SESSION['email'];
	$sqll="SELECT * FROM `$sender` WHERE sender='$receiver'";
	$result=mysqli_query($db,$sqll); ?>
		<?php while($row = mysqli_fetch_array($result)){ ?>
		<?php $receiver=$_REQUEST['chatid']; ?>
		<i><?php echo $row['sender']; ?> :: &nbsp&nbsp&nbsp&nbsp </i>	 <strong>	<?php echo $row['message'] ?></strong> <br>
		<div class="text-muted"><?php echo $row['rtime'] ?></div>
	 
<?php	 }?>

	<?php
		$receiver=$_REQUEST['chatid'];
		//echo "$receiver";
		
	?>
	<div class="sticky_sendbox">
	<div class="jumbotron">
		<hr style="border: solid;">
	<form action="chat.php" method="POST">

		<input type="text" name="message" placeholder="please enter your message here" style="width: 100%;" required="">
		<input type='hidden' name='chatid' value='<?php echo "$receiver";?>'/> 
		<input type="submit" name="submit" value="Send" class="btn btn-success">
		<input type="reset" name="reset" value="Clear" class="btn btn-danger">

	</form>
	</div>

	</div></div> </div><!-- jumbotron and margin ends here--->

<style>
.sticky_sendbox {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #fff;
    color: Black ;
    text-align: center;
}
</style>
<style>
.stkname {
    position: fixed;
    left: 0;
    bottom: 570px;
    width: 100%;
    background-color: #fff;
    color: purple	 ;
    text-align: center;
}
</style>

</body>
</html>