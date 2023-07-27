<?php
$conn = mysqli_connect('127.0.0.2:3307','root','','leaveapplication');
if(!$conn){
	echo "Connection error" . mysqli_connect_error();
}
?>