<?php
//include 'navbar.php';
if (isset($_POST['submit'])) {
	$db=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //else
  	//{echo "connected";}
session_start();
	$email=$_POST['email'];
//echo "$email";
	$password=sha1($_POST['password']);
	$query="SELECT * FROM user WHERE username='$email' AND password='$password'";
	$result=mysqli_query($db,$query);
	$count  = mysqli_num_rows($result);
if ($count==1) {
	$_SESSION['email']=$email;
	header('location:dash.php');
}
else{

	$ress="Incorrect Email or Password";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
img {
    -webkit-filter: blur(5px); /* Safari 6.0 - 9.0 */
    filter: blur(5px);
}
</style>
	<title>Login</title>
	<?php
		include 'C:\Xampp\htdocs\socio\navbar\navbar.php';
	?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body background="back.jpg">
	
	<form action="login.php" method="POST">
		<div class="form-group" style="margin-top: 100px;">
			<label>Email</label>
			<input type="email" name="email" class="form-control" autofocus="" required="">
		</div>
		<label>Password</label>
		<div class="form-group">
			<input type="password" name="password" class="form-control" required="">
		</div>	
		<div class="form-group form-check">
			<input type="submit" name="submit" class="btn btn-primary" value="Login">
			<a href="/socio/signup/signup.php">
				<input type="button" name="submit" class="btn btn-primary" value="Signup"></a>
		</div>
	</form>
<?php
	include 'C:\Xampp\htdocs\socio\footer\footer.php';

	?>
</body>
</html>