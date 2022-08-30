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
							<h1><a href="clientinfo.php" id="logo">Client</a></h1>
							<nav id="nav">
								<a href="clientinfo.php">Profile</a>
								<a href="payment.php" class="current-page-item">Make Payment</a>
								<a href="payment2.php">Payment History</a>
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
							<h2>Payment</h2>
							<form action="payment_script.php" method="POST" style="border:1px solid #ccc">
								<div class="container">
									<h2>Make Your Payment</h2>
							<?php 
							include 'database_coonect.php';
							session_start();
							$sql_get_amount = ("SELECT (pack_price+charge) AS pay_amount FROM pack_detail WHERE pack_id = (SELECT packageID FROM clint_info WHERE clint_id = '$_SESSION[clint_user_match]');");
							$result = mysqli_query($db,$sql_get_amount);
							if(mysqli_num_rows($result)>0){
								while ($row = mysqli_fetch_assoc($result)) {
									?>
									<h3>Amount To Pay: <?php echo $row["pay_amount"] ?> Taka Only</h3>
									<h3>Today's Date: <?php $date = date('d-m-y'); echo $date; ?></h3><?php  
								}
							}?>
									<hr>

									<label for="divition_name"><b>Reference Phone Number</b></label>
									<input type="number" placeholder="Enter Reference Number" name="divition_name" required>

									<label for="package_no">Payment Method:</label>
									<input type="text" placeholder="Choose Payment Method" list="package" name="package_no" id="package_no">
									<datalist id="package">
										<option value="Bkash">
											<option value="Nagad">
												<option value="Card">
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