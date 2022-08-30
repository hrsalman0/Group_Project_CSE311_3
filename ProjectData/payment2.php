<!DOCTYPE HTML>

<html>
	<head>
		<title>Payment History</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/list_emp.css" />
	</head>

<style>
  table {
    border-collapse: collapse; }


    th {
      text-align: inherit; }

      .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529; }
        .table th,
        .table td {
          padding: 0.75rem;
          vertical-align: top;
          border-top: 1px solid #dee2e6; }
          .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6; }
            .table tbody + tbody {
              border-top: 2px solid #dee2e6; }


              .table-wrap {
                overflow-x: scroll; }

                .table {
                  min-width: 1000px !important;
                  width: 100%;
                  background: #fff;
                  -webkit-box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
                  -moz-box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
                  box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
                  text-align: center; }
                  .table thead.thead-primary {
                    background: #6807f9; }
                    .table thead th {
                      border: none;
                      padding: 30px;
                      font-size: 14px;
                      color: #fff; }
                      .table tbody tr {
                        margin-bottom: 10px; }
                        .table tbody th, .table tbody td {
                          border: none;
                          padding: 30px;
                          font-size: 14px;
                          background: #fff;
                          vertical-align: middle;
                          border-bottom: 2px solid #f8f9fd; }
                          .table tbody th.scope {
                            background: #e8ebf8;
                            border-bottom: 2px solid #e0e5f6; }
                            @media (min-width: 768px) {
                              .table tbody td:nth-child(odd) {
                                background: #f4f6fc;
                                border-bottom: 2px solid #eceffa; } }


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
										<a href="clientinfo.php">Profile</a>
										<a href="payment.php">Make Payment</a>
										<a href="payment2.php" class="current-page-item">Payment History</a>
                    <a href="logoutAdmin.php">Log Out</a>
								
									</nav>
								</header>

							</div>
						</div>
					</div>
				</div>
				 <section class="ftco-section">
                              <div class="container">
                                <div class="row justify-content-center">
                                  <div class="col-md-6 text-center mb-5">
                                  </div>
                                </div>
                                <div class="table-wrap">
                                  <table class="table">
                                    <thead class="thead-primary">
                                      <tr>
                                        <th>Clint ID</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Method</th>
                                        <th>Reference Number</th>
                                        <th>Payment ID</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      include 'database_coonect.php';
                                      session_start();
                                      $sql_for_clint_list="SELECT clint_id,paid_amount,payment_date,payment_method,ref_number,payment_id FROM payment_details WHERE clint_id ='$_SESSION[clint_user_match]';";
                                      $result_as_row = mysqli_query($db,$sql_for_clint_list);
                                      if(mysqli_num_rows($result_as_row) > 0){
                                        while($row = mysqli_fetch_assoc($result_as_row)){ ?>
                                          <tr>
                                            <th scope="row" class="scope" ><?php echo $row["clint_id"]; ?></th>
                                            <td><?php echo $row["paid_amount"]; ?></td>
                                            <td><?php echo $row["payment_date"]; ?></td>
                                            <td><?php echo $row["payment_method"]; ?></td>
                                            <td><?php echo "0".$row["ref_number"]; ?></td>
                                            <td><?php echo $row["payment_id"]; ?></td>
                                            </tr><?php
                                          }
                                        }
                                        ?>
                                      </tbody>
                                    </table>
                                    
                                  </div>
                                </div>
                              </section>
				
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