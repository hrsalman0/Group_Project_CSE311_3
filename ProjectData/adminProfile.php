
<!DOCTYPE HTML>
<html>

<head>
	<title><?php
	session_start();
	$db = mysqli_connect("localhost","root","","com_database_project");
	$sql1 = "SELECT first_name,last_name FROM admin_info WHERE user='$_SESSION[userm]'";
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
								<a href="adminProfile.php" class="current-page-item">Profile</a>
								<a href="newclientandemployee.html">New Client and Employee</a>
								<a href="complaintAdmin.php">Complaint</a>
								<a href="emp_list.php">Employee and Client List</a>
								<a href="incomeandexpence.php">Income and Expence</a>
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
					$sql1 = "SELECT first_name,last_name FROM admin_info WHERE user='$_SESSION[userm]'";
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

	<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="row main-row">
				<div class="col-4 col-12-medium">

					<section>
						<h2><?php
						$sql1 = "SELECT first_name,last_name FROM admin_info WHERE user='$_SESSION[userm]'";
						$result = mysqli_query($db,$sql1);
						if(mysqli_num_rows($result)>0){
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row["last_name"]."'s Info";
							}
						}
					?></h2>

					<p><?php
					$sql1 = "SELECT discrpt FROM admin_info WHERE user='$_SESSION[userm]'";
					$result = mysqli_query($db,$sql1);
					if(mysqli_num_rows($result)>0){
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row["discrpt"];
						}
					}
				?></p>
			</section><br>

		</div>
		<div class="col-4 col-6-medium col-12-small">

			<section>
				<h2><?php
				$sql1 = "SELECT first_name,last_name FROM admin_info WHERE user='$_SESSION[userm]'";
				$result = mysqli_query($db,$sql1);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)) {
						echo $row["last_name"]."'s Contacts";
					}
				}
			?></h2>
			<p><?php
			$sql1 = "SELECT phone_number,email,user FROM admin_info WHERE user='$_SESSION[userm]'";
			$result = mysqli_query($db,$sql1);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "Phone Number: "."0".$row["phone_number"]."<br>"."Email: ".$row["email"]."<br>"."User ID: ".$row["user"]."<br>";
				}
			}
		?></p>
	</section>
	<div class="row">
		<div class="col-12">

			<div id="copyright">
				&copy;All rights reserved. © Design: Salman Khan | Md. Shahariar Alam Sifat | Md.Samiullah Shekh
			</div>

		</div>
	</div>
</div>
</body>
</html>