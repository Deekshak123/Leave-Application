<?php 
session_start();
	include_once "config.php";
	global $row1;

	if(isset($_POST['submit']))
	{
		$leavetype=$_POST['leavetype'];
		$fromdate=$_POST['fromdate'];
		$todate=$_POST['todate'];
		$fromtime=$_POST['fromtime'];
		$totime=$_POST['totime'];
		$reason=$_POST['reason'];
		$status="Pending";
		$username = $_SESSION["sess_user"];
      $eid_query = mysqli_query($conn,"SELECT unique_id FROM users WHERE username='".$username."'");
      
      $row = mysqli_fetch_array($eid_query);
      

		$sql="insert into leaveinsert(leave_id,leavetype,fromdate,todate,fromtime,totime,reason,status) values('{$row['unique_id']}','$leavetype','$fromdate','$todate','$fromtime','$totime','$reason','$status')";

		if(mysqli_query($conn,$sql))
		{
			echo "<script>window.open('../leavehistory.php','_self')</script>";
		}
		else
		{
			echo "error:".mysqli_error($conn);
		}
	}
?>