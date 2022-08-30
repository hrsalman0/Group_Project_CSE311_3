<!DOCTYPE HTML>
<html>
<head>
	<title>File Complaint</title>
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
									<h1><a href="clientinfo.php" id="logo">Client</a></h1>
									<nav id="nav">
										<a href="clientinfo.php">Profile</a>
										<a href="complaint.html">File Complaint</a>
										<a href="complaint2.php">Complaint History</a>
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
					include "database_coonect.php";
					$com_catagory = $_POST["package_no"];
					$problem_discription = $_POST["divition_name"];
					$date = date('y-m-d');
					session_start();
					$sql_to_complaint = "INSERT INTO complaint_list(complaint_catagory,complaint_detail,clint_id,complaint_date,solve_check) VALUES ('$com_catagory','$problem_discription','$_SESSION[clint_user_match]','$date',0)";

					if(mysqli_query($db,$sql_to_complaint))

						?>
						
						<div class="col-8 col-12-medium">

							<section>
								<h2><pre>                                                                                                              Complaint Filed</pre></h2><br><br><br><br><br><br><br><br><br><br><br><br>
							</section>

							</div><?php?>
							
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
