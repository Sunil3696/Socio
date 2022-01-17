<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';
$db=mysqli_connect("localhost","root","","project");
$name=$_SESSION['email'];
if(isset($_POST['insert'])){
	$content=$_POST['content'];
	$file=addslashes(file_get_contents($_FILES["image"] ["tmp_name"]));
	$query="INSERT INTO feeds (image,content,name) VALUES ('$file','$content','$name')";
	mysqli_query($db,$query);
}






?>
<!DOCTYPE html>
<html>
<head>
	<title>Socio</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>	
	<div class="container" style="margin-top: 80px;">
		<div class="container-fluid text-center">
  			<div class="jumbotron">
  		<h1><?php echo"". $_SESSION["email"];   ?></h1>
  			<strong><a href="update_info.php">Update info</a><br>
  			<a href="security.php">Security and Login</a></strong>
  			</div>
  		</div>

		<a class="btn btn-primary" data-toggle="collapse" href="#uploadpost"  role="button" aria-expanded="false" aria-controls="uploadpost">Upload new post</a>
		<div class="row">
 	 		<div class="col">
				<div class="collapse multi-collapse" id="uploadpost" class="btn btn-primary" >
					<form method="POST" enctype="multipart/form-data">
					<input type="text" name="content" class="form-control" placeholder="Whats on your mine now????">	<br>
	<input type="file" name="image" id="image"><br>
	<input type="submit" name="insert" value="insert" id="insert"></form>


				</div>
			</div>
		</div>
			<a class="btn btn-primary" data-toggle="collapse" href="#Friends"  role="button" aria-expanded="false" aria-controls="Friends">Friends</a>
		<div class="row">
 	 		<div class="col">
				<div class="collapse multi-collapse" id="Friends" class="btn btn-primary" >
					<strong>This link is under Consrtuction</strong>

				</div>
			</div>
		</div>
<a class="btn btn-primary" data-toggle="collapse" href="#Activity"  role="button" aria-expanded="false" aria-controls="Activity">Activity</a>
		<div class="row">
 	 		<div class="col">
				<div class="collapse multi-collapse" id="Activity" class="btn btn-primary" >
					<strong>This link is under Consrtuction</strong>

				</div>
			</div>
		</div>

	</div>	</div>
</strong>


<?php
$sql="SELECT * FROM feeds WHERE name='$name'";
$result=mysqli_query($db,$sql);
while ($row=mysqli_fetch_array($result)) {?>
<div class="jumbotron">
	<h2><?php echo $row['name'];  ?></h2>
	<div class="container">
	<?php

	echo $row['content'];
	 echo '
	<center>
	<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['image']).'">';
	?><hr>
	 <li class="fa fa-thumbs-up" style="font-size:24px"></li>&nbsp&nbsp&nbsp&nbsp&nbsp
            <li class="fa fa-comment" style="font-size:24px"></li>&nbsp&nbsp&nbsp&nbsp&nbsp
               
<?php }


?>




















<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function()	
	{
		$('#insert').click(function()
				{
					var image_name = $('#image').val();
					if (image_name == '') {

						alert("image not selected");
						return false;

					}
	else
	{

		var extension = $('#image').val().split('.').pop().toLowerCase();
		if (jquery.inArray(extension,['gif','png','jpg'])== -1) {

			alert('invalid data');
			$('#image').val('');
			return false;

		}

	}




				});



		});	



</script>









</body>
</html>