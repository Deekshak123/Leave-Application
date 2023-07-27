<?php 
	session_start();
	include_once "config.php";
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from users where username='$username' and password='$password'";
		$que=mysqli_query($conn,$sql);
		$row1=mysqli_fetch_assoc($que);

		$_SESSION['sess_user']=$row1['username'];
		$_SESSION['sess_id']=$row1['unique_id'];
		

		if(mysqli_num_rows($que)>0){
			if($row1['type']=="Student"){
			echo "<script>window.open('../leaveinsertt.php','_self')</script>";
		}else{
			echo "<script>window.open('../adminhome.php','_self')</script>";
		}
		}
		else
		{
			echo "<script>alert('wrong username and password')</script>";
			echo "<script>window.open('../home.php','_self')</script>";
		}
	}

	

?>