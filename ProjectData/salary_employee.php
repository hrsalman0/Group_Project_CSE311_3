<!DOCTYPE HTML>

<html>
<head>
	<title>Make Payment</title>
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
                                       <h1><a href="adminProfile.php" id="logo">Admin</a></h1>
                                       <nav id="nav">
                                        <a href="adminProfile.php">Profile</a>
                                        <a href="emp_list.php" >Employee List</a>
                                        <a href="salary_employee.php" class="current-page-item">Employee Salary</a>
                                        <a href="clint_list.php">Client List</a>
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
					<div class="col-8 col-12-medium">

						<section>
							<form action="salary_employee2.php" method="POST" style="border:1px solid #ccc">
								<div class="container">
									<h2>Make Your Payment</h2>
									<hr>

									<label for="divition_name"><b>Employee ID</b></label>
									<input type="text" placeholder="Enter Employee ID" name="divition_name" required>

									<label for="package_no">Payment Method:</label>
									<input type="text" placeholder="Choose Payment Method" list="package" name="package_no" id="package_no">
									<datalist id="package">
										<option value="Bkash">
											<option value="Nagad">
												<option value="Bank">
												</datalist>

												<div class="clearfix">
													<button type="button" class="cancelbtn">Cancel</button>
													<button type="submit" class="signupbtn">Pay</button>
												</div>
											</div>
										</form>
									</section>

								</div>
								
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