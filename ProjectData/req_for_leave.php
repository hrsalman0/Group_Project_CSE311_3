<?php 
$reason = $_POST["firstname"];
$fromdate = $_POST["birthday1"];
$todate = $_POST["birthday2"];

include 'database_coonect.php';
session_start();
$empid = $_SESSION['emp_user_match'];

$sql = "INSERT INTO employee_leave_request(emp_id, reason, from_date, to_date) VALUES ('$empid','$reason','$fromdate','$todate')";

if(mysqli_query($db,$sql)){
	header("location: req_confirm.html");
}
else{
	header("location: req_for_leave.html");
}
 ?>
