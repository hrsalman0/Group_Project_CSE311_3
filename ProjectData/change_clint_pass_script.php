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
							<h1><a href="clientinfo.php" id="logo">Client</a></h1>
							<nav id="nav">
								<a href="clientinfo.php">profile</a>
								<a href="payment.php">Payment</a>
								<a href="complaint.html">Online Complaint</a>
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

					$sql_get_pass = "SELECT clint_password FROM clint_log WHERE clint_id = '$_SESSION[clint_user_match]';";
					$result = mysqli_query($db,$sql_get_pass);

					if(mysqli_num_rows($result)>0){
						while ($row = mysqli_fetch_assoc($result)) {
							if($currentpass==$row["clint_password"]){ 
								if($newpass == $repeatpass){
									$sql_change_pass = "UPDATE clint_log SET clint_password = $newpass WHERE clint_id = '$_SESSION[clint_user_match]';";
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