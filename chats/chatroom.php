<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>chatroom</title>
</head>
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
                  <a href=chat.php?chatid=<?php echo $row['username'] ?> > Start Conversation</a></td><br></h4>
           </div>
            </tr>
           <?Php   }?>
</body>
</html>