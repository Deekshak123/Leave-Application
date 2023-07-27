
<?php 
    	include_once "php/config.php";
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
	<link rel="stylesheet" type="text/css" href="adminhome.css">
</head>
<body>
<nav>
	<div class="logo">
		<p><a href="adminhome.php">Online Leave Application</a></p>
	</div>
	<ul>
		<li ><a href="viewstudent.php" class="view">View Students</a></li>
		<li><a href="adminhistory.php">View Leave History</a></li>
		<li><button class="logout" onclick="window.location.href='php/logout.php';">Logout</button></li>
	</ul>
</nav>
<div style="height: 100px;width: 100%;"></div>
<h1 class="head">Admin Panel</h1>
<form>
	<table>
		<tr>
			<th style="width:40px;">#</th>
			<th style="width:180px;">Employee</th>
			<th style="width:450px;">Leave Application</th>
			<th style="width:310px;">Dates/Time</th>
			<th style="width:190px;">Actions</th>
		</tr>
		<?php 
				$leave = mysqli_query($conn,"SELECT * FROM users,leaveinsert WHERE users.type='Student' and leaveinsert.status='Pending' and leaveinsert.leave_id=users.unique_id ");
                  if($leave){
                    $numrow = mysqli_num_rows($leave);
                    if($numrow!=0){
                      $cnt=1;
				while($row = mysqli_fetch_assoc($leave))
				{
					?>
		<tr>
			<td><?php echo $cnt; ?></td>
			<td><?php echo $row['fullname'] ?></td>
			<td><?php echo $row['leavetype'].':'.$row['reason']; ?></td>
			<td><?php echo $row['fromdate'].'  '.$row['fromtime'].' - '.$row['todate'].'  '.$row['totime'] ?></td>
			<td><button class="accept"><a href="php/updatestatusaccept.php?leave_id=<?php echo $row['leave_id']; ?>&reason=<?php echo $row['reason']; ?>">Accept</a></button>
				<button class="reject"><a href="php/updatestatusreject.php?leave_id=<?php echo $row['leave_id']; ?>&reason=<?php echo $row['reason']; ?>">Reject</a></button></td>
		</tr>
			<?php
				$cnt++;
			
		}
		} 
	}
	?>
	</table>
</form>
</body>
</html>