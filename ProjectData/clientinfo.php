<!DOCTYPE HTML>

<html>
<head>
	<title><?php
	session_start();
	$db = mysqli_connect("localhost","root","","com_database_project");
	$sql1 = "SELECT first_name,last_name FROM clint_info WHERE clint_id='$_SESSION[clint_user_match]'";
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
		<!-- Banner -->
		<div id="banner-wrapper">
			<div class="container">

				<div id="banner">
					<h2><?php
					$sql1 = "SELECT first_name,last_name FROM clint_info WHERE clint_id='$_SESSION[clint_user_match]'";
					$result = mysqli_query($db,$sql1);
					if(mysqli_num_rows($result)>0){
						while ($row = mysqli_fetch_assoc($result)) {


							echo $row["first_name"]." ".$row["last_name"];


						}
					}
				?></h2>
				<!-- <span>And put something almost as cool here, but a bit longer ...</span> -->
			</div>

		</div>
	</div>

	<div id="main">
		<div class="container">
			<div class="row main-row">
				<div class="col-4 col-12-medium">

					<section>
						<h2><?php
						$sql1 = "SELECT last_name,first_name FROM clint_info WHERE clint_id ='$_SESSION[clint_user_match]';";
						$result = mysqli_query($db,$sql1);
						if(mysqli_num_rows($result)>0){
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row["last_name"]."'s Info";
							}
						}
					?></h2>

					<p><?php
					$sql1 = "SELECT ci.birthdate,ci.clint_nid,ca.address_line,ca.district,ca.divition FROM clint_info AS ci, clint_address AS ca WHERE (ci.clint_id = '$_SESSION[clint_user_match]') AND (ci.clint_id = ca.clint_id);";
					$result = mysqli_query($db,$sql1);
					if(mysqli_num_rows($result)>0){
						while ($row = mysqli_fetch_assoc($result)) {
							echo "Birthdate: ".$row["birthdate"]."<br>"."NID Number: ".$row["clint_nid"]."<br>"."Address Detail: ".$row["address_line"]."<br>"."District : ".$row["district"]."<br>"."Divition : ".$row["divition"];
						}
					}
				?></p>
			</section>

		</div>
		<div class="col-4 col-6-medium col-12-small">

			<section>
				<h2><?php
				$sql1 = "SELECT last_name,first_name FROM clint_info WHERE clint_id ='$_SESSION[clint_user_match]';";
				$result = mysqli_query($db,$sql1);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<br>".$row["last_name"]."'s Contacts";
					}
				}
			?></h2>
			<p><?php
			$sql1 = "SELECT clint_email,clint_phone FROM clint_info WHERE (clint_id = '$_SESSION[clint_user_match]');";
			$result = mysqli_query($db,$sql1);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "Phone Number: "."0".$row["clint_phone"]."<br>"."Email: ".$row["clint_email"]."<br>";
				}
			}
		?></p>
	</section>
	<pre>                                                                                                                                                                                                           <a href="change_clint_pass_form.html"><button class="button">Change Password</button></pre>

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