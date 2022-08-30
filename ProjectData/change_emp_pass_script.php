<!DOCTYPE HTML>
<html>
<head>
	<title>Change Password</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/addemp.css" />
</head>
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
								<a href="employeeinfo.html">Request Day Leave</a>
								<a href="emp_check_salary_date.php">Salary Date</a>
								<a href="logoutAdmin.php">Log Out</a>
							</nav>
						</header>
					</div>
				</div>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<?php 
					include 'database_coonect.php';
					session_start();

					$currentpass = $_POST['cpsw'];
					$newpass = $_POST['npsw'];
					$repeatpass = $_POST['rnpsw'];

					$sql_get_pass = "SELECT emp_pass FROM employee_log WHERE emp_user = '$_SESSION[emp_user_match]';";
					$result = mysqli_query($db,$sql_get_pass);

					if(mysqli_num_rows($result)>0){
						while ($row = mysqli_fetch_assoc($result)) {
							if($currentpass==$row["emp_pass"]){ 
								if($newpass == $repeatpass){
									$sql_change_pass = "UPDATE employee_log SET emp_pass = $newpass WHERE emp_user = '$_SESSION[emp_user_match]';";
									if(mysqli_query($db,$sql_change_pass)){
										?>
										<div class="col-8 col-12-medium">

											<section>
												<h2><pre>                                                                                                              Password Changed</pre></h2><br><br><br><br><br><br><br><br><br><br><br><br>
											</section>

										</div>

										<?php
									}
								}
								else{
									?>
									<div class="col-8 col-12-medium">

										<section>
											<h2><pre>                                                                                                              Repeat Password Wrong</pre></h2><br><br><br><br><br><br><br><br><br><br><br><br>
										</section>

									</div>
									<?php
								}
							}
							else{
								?>
								<div class="col-8 col-12-medium">

									<section>
										<h2><pre>                                                                                                              Wrong Password</pre></h2><br><br><br><br><br><br><br><br><br><br><br><br>
									</section>

								</div>
								<?php
							}
						}
					}


					?>
					<div class="row">
						<div class="col-12">

							<div id="copyright">
								&copy;All rights reserved. © Design: Salman Khan | Md. Shahariar Alam Sifat | Md.Samiullah Shekh
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>

		
	</body>
	</html>
