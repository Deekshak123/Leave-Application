
<?php 
    	include_once "php/config.php";
    	session_start();


			if(!isset($_SESSION['sess_id'])){
				header("location: home.php");
			}

			if(isset($_GET['unique_id'])){
				$id=$_GET['unique_id'];
				$detete=mysqli_query($conn,"delete from users where unique_id='$id'");
			}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width,initial-scale=1.0">
	<title>neviagation baar</title>
	
	<link rel="stylesheet" type="text/css" href="viewstudent.css">
</head>
<body>
	<nav>
		<div class="logo">
			<p><a href="adminhome.php">Online Leave Application</a></p>
		</div>
		<ul>
			<li><a href="viewstudent.php">View Student</a></li>
			<li><a href="adminhistory.php">View Leave History</a></li>
			<li><button class="logout" onclick="window.location.href='php/logout.php';" >Logout</button></li>
	</nav>
	<div class="heading">
	    <h1>Admin Panel - Registered Students</h1>
	</div>
	<form>
		<table class="table">
			<tr>
				<th style="width: 10px;">#</th>
				<th style="width: 70px;">Username</th>
				<th style="width: 150px;">Fullname</th>
				<th style="width: 150px;">Email</th>
				<th style="width: 30px;">Department</th>
				<th style="width: 40px;">Gender</th>
				<th style="width: 140px;">City</th>
				<th style="width: 100px;">Contact</th>
				<th style="width: 100px;">Action</th>
			</tr>
			<?php 
				$student = mysqli_query($conn,"SELECT * FROM users WHERE type='Student'");
                  if($student){
                    $numrow = mysqli_num_rows($student);
                    if($numrow!=0){
                      $cnt=1;
				while($row = mysqli_fetch_assoc($student))
				{
					?>
			<tr>
				<td><?php echo $cnt; ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['fullname'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['department'] ?></td>
				<td><?php echo $row['gender'] ?></td>
				<td><?php echo $row['city'] ?></td>
				<td><?php echo $row['phoneno'] ?></td>
				<td><button class="delete"><a href='viewstudent.php?unique_id=<?php echo $row['unique_id']; ?>'>Delete</a></button></td>
			</tr>
			<?php
				$cnt++;
			
		}
		} 
	}
	?>
		</table>
	</form>