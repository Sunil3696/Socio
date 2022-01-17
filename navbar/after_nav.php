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
<div class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
	<div class="conatainer">
		<div class="navbar-header">
			
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				

			</button>
			<a href="/socio/login/dash.php" class="navbar-brand">SOCIO</a>
</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/socio/profile/profile.php" class="fa fa-user">&nbspProfile</a>
				<li><a href="/socio/chats/chatroom.php" class="fa fa-comment">&nbspChats<span class="badge badge-light">4</span></a>
				<li><a href="#" class="fa fa-bell">&nbsp Notification<span class="badge badge-light">18</span></a>
				<li><a href="#" class="fa fa-users	">&nbspFriends</a>

			</ul>
			<div class="form-group" style="float: right; font-variant: all;">
        <?php
echo "" . $_SESSION["email"] . ".<br>";

?>
<a href="/socio/login/logout.php" class="fa fa-sign-out"></a>
      </div>
		</div>

	</div><!--conatainer colse--->
</div>
</div>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="back.jpg">





</body>
</html>