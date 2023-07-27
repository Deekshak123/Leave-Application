
<?php 
    	include_once "php/config.php";
    	session_start();


			if(!isset($_SESSION['sess_id'])){
				header("location: home.php");
			}

    	global $row1;
		#$id = $_SESSION["sess_id"];
      #$eid_query = mysqli_query($conn,"SELECT * FROM leaveinsert WHERE leave_id='".$id."'");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="leavehistory.css">
</head>
<body>
<nav>
	<div class="logo">
		 <p><a href="leaveinsertt.php">Online Leave Application</a></p>
	</div>
	<ul>
		<li><a href="#">My Leave History</a></li>
		<li><button class="logout" onclick="window.location.href='php/logout.php';">Logout</button></li>
	</ul>
</nav>
<div style="height: 100px;width: 100%;"></div>
<h1 class="head">My Leave History</h1>
<form>
	<table>
		<tr>
			<th style="width: 40px;">#</th>
			<th style="width:300px;">Leave Appliation</th>
			<th style="width: 180px;">From</th>
			<th style="width:180px;">To</th>
			<th style="width:150px;">Status</th>
			<th style="width:100px;">PDF</th>
		</tr>
		
			<?php 
				$leaves = mysqli_query($conn,"SELECT * FROM leaveinsert WHERE leave_id='".$_SESSION['sess_id']."'");
                  if($leaves){
                    $numrow = mysqli_num_rows($leaves);
                    if($numrow!=0){
                      $cnt=1;
				while($row = mysqli_fetch_assoc($leaves))
				{
					?>
					<tr>
			
					<td><?php echo $cnt; ?></td>
					<td><?php echo $row['leavetype'].':'.$row['reason']; ?></td>
					<td><?php echo $row['fromdate'].'  '.$row['fromtime']; ?></td>
					<td><?php echo $row['todate'].'  '.$row['totime']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td><a href="php/leavepdf.php?ID=<?php echo $row['id']; ?>&ACTION=DOWNLOAD" class="download">Download</a></td>

				</tr>
				<?php
				$cnt++;
			
		}
		} else {
                      echo"<tr class='text-center'><td colspan='12'><b>YOU DON'T HAVE ANY LEAVE HISTORY! PLEASE APPLY TO VIEW YOUR STATUS HERE!</b></td></tr>";
                    }
                  }
		?>
		
	</table>
</form>
</body>
</html>