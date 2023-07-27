<?php

require_once("config.php");
session_start();

if(!isset($_SESSION["sess_id"])){
	header("Location: home.php");
  }
else{

	$lid = $_GET['leave_id'];
	$reason = $_GET['reason'];

	$add_to_db = mysqli_query($conn,"UPDATE leaveinsert SET status='Rejected' WHERE leave_id='".$lid."' AND reason='".$reason."'");

				if($add_to_db){	
					echo 'Saved!!';
					header("Location: ../adminhome.php");
				}
				else{
					echo "Query Error : " . "UPDATE leaves SET status='Rejected' WHERE eid='".$eid."' AND descr='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
?>