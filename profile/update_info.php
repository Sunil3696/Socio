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
	<title>Socio</title>
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
<div class="container">
	<?php 
	include 'C:\Xampp\htdocs\socio\dbconn\dbconn.php';
	$name=$_SESSION["email"];
	//echo "$name";
	$sql="SELECT * FROM user WHERE username='$name'";
	$result=mysqli_query($db,$sql); ?>
	<?php 
	while($row = mysqli_fetch_array($result)){ ?>
		
        <strong> Email: </strong> <?php echo $row['username'];  ?> <a href="update_info.php?changes=<?php echo $row['username'] ?>" > Edit</a> <br>  <br>   
        <strong> First Name: </strong> <?php echo $row['fname'];  ?> <a href="update_info.php?changes=<?php echo $row['fname'] ?>" > Edit</a> <br>  <br>   
        <strong> Last Name: </strong> <?php echo $row['lname'];  ?> <a href="update_info.php?changes=<?php echo $row['lname'] ?>" > Edit</a> <br>   <br>  
       


	<?php }




	?>

</div>



</strong>
</body>
</html>