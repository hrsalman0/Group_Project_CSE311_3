<?php 
include 'database_coonect.php';
session_start();
$empid = $_POST["firstname"];
$comid = $_POST["lastname"];
$adminID = $_SESSION['userm'];

$empid2 = NULL;
$comid2 = NULL;
$clintid = NULL;
$sql = "SELECT emp_user FROM employee_log WHERE emp_user = '$empid';";
$sql2 ="SELECT complaint_id,clint_id FROM complaint_list WHERE complaint_id = '$comid';";
$result = mysqli_query($db,$sql);
$result2 = mysqli_query($db,$sql2);

if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) {
		$empid2 = $row["emp_user"];
	}     
}

if(mysqli_num_rows($result2)>0){
	while ($row = mysqli_fetch_assoc($result2)) {
		$comid2 = $row["complaint_id"];
		$clintid = $row["clint_id"];
	}     
}

echo $comid2;
echo $clintid;
if($empid == $empid2 && $comid == $comid2){
	$sql_assign = "INSERT INTO employee_assign(emp_id, complaint_id, admin_id, clint_id) VALUES ('$empid2','$comid2','$adminID','$clintid');";
	if(mysqli_query($db,$sql_assign)){header("location: assign_confim.php");;}
}
else{
	header("location: assign_employee.php");
}




?>