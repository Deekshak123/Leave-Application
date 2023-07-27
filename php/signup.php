<?php 
	session_start();
	include_once "config.php";
	if(isset($_POST['submit']))
	{
		$uniqueid= rand(time(),100000000);
		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$phoneno=$_POST['phoneno'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$city=$_POST['city'];
		$department=$_POST['department'];
		$type="Student";

		$sql="insert into users(unique_id,fullname,username,email,phoneno,password,gender,city,department,type) 
		values('$uniqueid','$fullname','$username','$email','$phoneno','$password','$gender','$city','$department','$type')";

		if(mysqli_query($conn,$sql))
		{
			echo "<script>window.open('../home.php','_self')</script>";
		}
		else
		{
			echo "error:".mysqli_error($conn);
		}

	}
?>