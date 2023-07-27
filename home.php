<?php
  session_start();
  if(isset($_SESSION['sess_id'])){
  	header("location: leaveinsertt.php");
  }
?>


<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width,initial-scale=1.0">
	<title>Online Leave Application</title>
	
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<nav>
		<div class="logo">
			<p>Online Leave Application</p>
		</div>
		<ul>
			<li><a href="signupp.php">signup</a></li>
		</ul>
	</nav>
		<div class="body">

	    <h1 class="heading">Please login to continue...</h1>
	<form method="post" action="php/login.php">
		<input type="text" name="username" class="textbox">
		<label class="form-lable">Login id</label><br>
		<input type="password" name="password" class="textbox2">
		<label class="form-lable2">Password</label><br>
		<input type="submit" name="submit" class="textbutton" value="Login">
</form>
</div>
</body>
</html>

	
	


</body>
</html>