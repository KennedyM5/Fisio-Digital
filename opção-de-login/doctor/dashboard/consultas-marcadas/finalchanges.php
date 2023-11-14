<?php 
include("../../conexões/protect.php");
include('../../conexões/db.php');
$clinicid = $_GET['value'];
$doctor_id = $_SESSION['docid'];
$appointmentid =$_SESSION['id'];
$clientid =$_SESSION['clientid'];
$date = date('d:m:Y');
if(isset($_GET['lab_select']))
{
	
	$qry = "INSERT INTO reports (appointmentid, doctorid, clientid, clinicid, report, report_type, date_of_request, report_status) VALUES (?, ?, ?, ?, ?, ?, ?)";
}	$execute = mysqli_query($con, $qry);
	if($execute)
	{
		
	?>
	<script>alert("laboratory details updated successfully");
			window.open('appointment.php','_SELF');
	</script>
			
	<?php
	}
	else
	{
		echo "error";
	}

?>