<?php


?>
<?php
session_start();
if(!isset($_SESSION['email']))
 {
 header('location:/socio/Login/login.php');

}
//include 'navbar.php';<!-- not required now!>
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOCIO</title>
  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<?php
include 'C:\Xampp\htdocs\socio\dbconn\dbconn.php';
	$name=$_SESSION["email"];
$query="SELECT * FROM user";
$result=mysqli_query($db,$query);?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Available</th>
    
    </tr>
  </thead>
 <?php while($row = mysqli_fetch_array($result)){ 
	?>
	    <tr>

	    	<div class="container">
	    		
                 <strong><h4> <td> <?php echo $row['username'] ?></strong>
                  <a href=chat.php?<?php echo $row['username'] ?> > Start Conversation</a></td><br></h4>

           </div>

            </tr>
            <?Php   }?>




</body>
</html>
