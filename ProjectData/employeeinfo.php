<!DOCTYPE HTML>

<html>
<head>
	<title><?php
	session_start();
	include 'database_coonect.php';
	$sql1 = "SELECT last_name,first_name FROM employee_info WHERE emp_user ='$_SESSION[emp_user_match]';";
	$result = mysqli_query($db,$sql1);
	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)) {
			
			echo $row["last_name"]." | Profile";		
		}
	}
?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/adminprof.css" />
</head>
<style>
	.button {
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #008CBA;
	}
</style>
<body>
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<header id="header">
							<h1><a href="employeeinfo.php" id="logo">Employee</a></h1>
							<nav id="nav">
								<a href="employeeinfo.php" class="current-page-item">Profile</a>
								<a href="complaintlist.php">Complaint</a>
								<a href="req_for_leave.html">Request Day Leave</a>
								<a href="emp_check_salary_date.php">Salary Date</a>
								<a href="logoutAdmin.php">Log Out</a>
							</nav>
						</header>

					</div>
				</div>
			</div>
		</div>

		<!-- Banner -->
		<div id="banner-wrapper">
			<div class="container">

				<div id="banner">
					<h2>
						<?php
						include 'database_coonect.php';
						$sql1 = "SELECT last_name,first_name FROM employee_info WHERE emp_user ='$_SESSION[emp_user_match]';";
						$result = mysqli_query($db,$sql1);
						if(mysqli_num_rows($result)>0){
							while ($row = mysqli_fetch_assoc($result)) {
								
								echo $row["first_name"]." ".$row["last_name"];		
							}
						}
					?></h2>
					
				</div>

			</div>
		</div>

		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="col-4 col-12-medium">

						<section>
							<h2><?php
							$sql1 = "SELECT last_name,first_name FROM employee_info WHERE emp_user ='$_SESSION[emp_user_match]';";
							$result = mysqli_query($db,$sql1);
							if(mysqli_num_rows($result)>0){
								while ($row = mysqli_fetch_assoc($result)) {
									echo $row["last_name"]."'s Info";
								}
							}
						?></h2>

						<p><?php
						$sql1 = "SELECT ei.birth_date,ei.emp_nid,ei.emp_email,ei.emp_phone,ea.village_name,ea.district,ea.divition,er.emp_salary,er.emp_job_role FROM employee_info AS ei, employee_address AS ea, employee_role AS er WHERE (ei.emp_user = '$_SESSION[emp_user_match]') AND (ei.emp_user = ea.emp_user) AND (ea.emp_user=er.emp_user);";
						$result = mysqli_query($db,$sql1);
						if(mysqli_num_rows($result)>0){
							while ($row = mysqli_fetch_assoc($result)) {
								echo "Birthdate: ".$row["birth_date"]."<br>"."NID Number: ".$row["emp_nid"]."<br>"."Village Name: ".$row["village_name"]."<br>"."District Name: ".$row["district"];
							}
						}
					?></p>
				</section>

			</div>
			<div class="col-4 col-6-medium col-12-small">

				<section>
					<h2><?php
					$sql1 = "SELECT last_name,first_name FROM employee_info WHERE emp_user ='$_SESSION[emp_user_match]';";
					$result = mysqli_query($db,$sql1);
					if(mysqli_num_rows($result)>0){
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row["last_name"]."'s Contacts";
						}
					}
				?></h2>
				<p><?php
				$sql1 = "SELECT ei.birth_date,ei.emp_nid,ei.emp_email,ei.emp_phone,ea.village_name,ea.district,ea.divition,er.emp_salary,er.emp_job_role FROM employee_info AS ei, employee_address AS ea, employee_role AS er WHERE (ei.emp_user = '$_SESSION[emp_user_match]') AND (ei.emp_user = ea.emp_user) AND (ea.emp_user=er.emp_user);";
				$result = mysqli_query($db,$sql1);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)) {
						echo "Phone Number: "."0".$row["emp_phone"]."<br>"."Email: ".$row["emp_email"]."<br>"."Salary: ".$row["emp_salary"]."<br>"."Job Role: ".$row["emp_job_role"]."<br>";
					}
				}
			?></p>
		</section>
		<pre>                                                                                                                                                                                                           <a href="change_emp_pass_form.html"><button class="button">Change Password</button></pre>

		</div>
		
		<div class="row">
			<div class="col-12">

				<div id="copyright">
					&copy;All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
				</div>

			</div>
		</div>
	</div>
</div>

</div>


</body>
</html>