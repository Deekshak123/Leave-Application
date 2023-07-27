
<?php 
	session_start();
	if(!isset($_SESSION['sess_id'])){
		header("location: home.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="leaveinsert.css">
</head>
<body>
<nav>
	<div class="logo">
		<p>Online Leave Application</p>
	</div>
	<ul>
		<li><a href="leavehistory.php">My Leave History</a></li>
		<li><button class="logout" onclick="window.location.href='php/logout.php';">Logout</button></li>
	</ul>
</nav>
<div style="height: 100px;width: 100%;"></div>
<form method="post" action="php/leaveinsert.php">
	<p class="head">Leave Application</p>
	<p class="leave">Select Leave Type:</p>
	<input type="radio" name="leavetype" class="leavetype" value="Home">Home<br>
	<input type="radio" name="leavetype" class="leavetype" value="Market">Market<br>
	<label class="from" style="margin-top:20px;">From 
		<input type="date" name="fromdate" style="margin-top:20px;">
	</label>
	<label>To 
		<input type="date" name="todate">
	</label><br>
	
	<label class="from" style="margin-top:20px;">From 
		<input type="time" name="fromtime" style="margin-top:20px;">
	</label>
	<label>To 
		<input type="time" name="totime">
	</label><br>
	<p class="reason">Please mention reason for leave</p><br>
	<textarea placeholder="Enter here..." name="reason" class="textarea"></textarea><br>
	<button type="submit" name="submit" class="request">Submit Leave Request</button>
</form>
</body>
</html>