<?php 
require_once("config.php");
include_once('../tcpdf.php');
session_start();

if(!isset($_SESSION["sess_id"])){
	header("Location: home.php");
  }
else{



$query="select * from users,leaveinsert where users.unique_id=leaveinsert.leave_id ";
$results = mysqli_query($conn,$query);   
$count = mysqli_num_rows($results);  
if($count>0){
	$data_row = mysqli_fetch_array($results, MYSQLI_ASSOC);

	//----- Code for generate pdf
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);  
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$pdf->SetDefaultMonospacedFont('helvetica');  
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	$pdf->setPrintHeader(false);  
	$pdf->setPrintFooter(false);  
	$pdf->SetAutoPageBreak(TRUE, 10);  
	$pdf->SetFont('helvetica', '', 12);  
	$pdf->AddPage(); //default A4
	//$pdf->AddPage('P','A5'); //when you require custome page size 
	
	$content = ''; 

	$content .= '
	<style type="text/css">
	body{
	font-size:12px;
	line-height:24px;
	font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	color:black;
	}
	</style>    
	<table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;">
	<table style="width:100%;" >
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><th colspan="2" align="center">LEAVE</th></tr><hr>
	<tr><td colspan="2">Name: '.$data_row['fullname'].'</td></tr>
	<tr><td colspan="2">Email: '.$data_row['email'].'</td></tr>
	<tr><td colspan="2">Phone No.: '.$data_row['phoneno'].'</td></tr>
	<tr><td colspan="2">Place: '.$data_row['leavetype'].'</td></tr>
	<tr><td colspan="2">Reason: '.$data_row['reason'].'</td></tr>
	<tr><td colspan="2">From: '.$data_row['fromdate'].'  '.$data_row['fromtime'].'</td></tr>
	<tr><td colspan="2">To: '.$data_row['todate'].'  '.$data_row['totime'].'</td></tr>
	<tr><td colspan="2">Status: '.$data_row['status'].'</td></tr>

	</table>
</table>'; 
$pdf->writeHTML($content);

$file_location = "C:\Users\HP\Downloads"; //add your full path of your server
//$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local xampp server

$datetime=date('dmY_hms');
$file_name = "INV_".$datetime.".pdf";
ob_end_clean();

if($_GET['ACTION']=='DOWNLOAD')
{
	$pdf->Output($file_name, 'D'); // D means download
}

}
}
?>