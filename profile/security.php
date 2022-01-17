<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';


	if (isset($_POST['Submit'])) 
	{
		session_start();
		$db=mysqli_connect("localhost","root","","project");
			if (mysqli_connect_errno())
  				{
  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
  				}
  			}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Security and login</title>
</head>
<body>	
	<div class="container" style="margin-top: 80px;">
		<div class="container-fluid text-center">
  			<div class="jumbotron">
  		<h1><?php echo"". $_SESSION["email"];   ?></h1>
  			<a href="update_info.php">Update info</a><br>
  			<a href="security.php">Security and Login</a>
  			</div>
  		</div>

		<a class="btn btn-primary" data-toggle="collapse" href="#uploadpost"  role="button" aria-expanded="false" aria-controls="uploadpost">Upload new post</a>
		<div class="row">
 	 		<div class="col">
				<div class="collapse multi-collapse" id="uploadpost" class="btn btn-primary" >
					<form action="profile.php" method="POST"  enctype="multipart/form-data">
					<input type="text" name="content" placeholder="pleae enter your post here" class="form-control"><br>
							<input type="file" name="image" value="image">
					<input type="Submit" name="Submit" value="Post" class="btn btn-primary"></form>


				</div>
			</div>
		</div></div>	</div><br><br>
<u><h3 class="container-Fluid">Security and Logins</h3></u>	
<div class="container">
<a class="btn btn-primary" data-toggle="collapse" href="#password"  role="button" aria-expanded="false" aria-controls="Friends">Change Password</a>
		<div class="row">
 	 		<div class="col">
				<div class="collapse multi-collapse" id="password" class="btn btn-primary">
					<br>
					<label>Current Password: </label><input type="text" name="cpassword"><br><br>
					<label>New Password: </label><input type="text" name="cpassword"><br><br>
					<label>Confirm Password: </label><input type="text" name="cpassword"><br><br>

				</div>
			</div>
		</div>
</body>
</html>