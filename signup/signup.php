<?php

$db=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (isset($_POST['Submit'])) {
session_start();
$email=$_POST['email'];
$password=sha1($_POST['password']);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
echo "$password";
$sql = "INSERT INTO user (id,fname,lname,username, password)
VALUES ('Null' ,'$fname','$lname','$email', '$password')";

mysqli_query($db,$sql);
 #Create table under the samedatabase with the signed up emailid 
	$sqll=" CREATE TABLE `$email` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sender VARCHAR(30) NOT NULL,
message VARCHAR(30) NOT NULL,
rtime TIMESTAMP
)";
mysqli_query($db,$sqll);
	header('location:C:\Xampp\socio\Login\dash.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<?php 
include'C:\Xampp\htdocs\socio\navbar\navbar.php';
 ?>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body background="back_dash.jpeg">
	<div class="container" style="margin-top: 100px;">
<form action="signup.php" method="POST">
	<div class="form-group">
		<div  class="col-sm-4">
	<label class="text-info">Email</label>
	<input type="email" name="email" class="form-control" placeholder="Please enter your emial here" autofocus="" required=""><br>

	<label class="text-info">password</label>
	<input type="password" name="password" placeholder="Please enter your password here"class="form-control" required="" ><br>

	<label class="text-info">First name</label>
	<input type="text" name="fname" placeholder="Please enter your Fname here"class="form-control" required=""><br>

	<label class="text-info">Lname</label>
	<input type="text" name="lname" placeholder="Please enter your LName here"class="form-control" required=""><br>
	<input type="Submit" name="Submit" value="Signup"></div>
	</div></div>
</form>
</body>
</html>