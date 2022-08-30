<!DOCTYPE HTML>

<html>
<head>
    <title>Add Clint Information</title>
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
                                <a href="payment.php">Make Payment</a>
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
                        <?php

                        include 'database_coonect.php';
                        session_start();

                        $payment_cat = $_POST["package_no"];
                        $refn = $_POST["divition_name"];

                        $result = mysqli_query($db,("SELECT (pack_price+charge) AS pay_amount FROM pack_detail WHERE pack_id = (SELECT packageID FROM clint_info WHERE clint_id = '$_SESSION[clint_user_match]');"));
                        $topay = 0;

                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                $topay = $row["pay_amount"];
                            }
                        }
                        $date = date('y-m-d');
                        $sql_to_payment = "INSERT INTO payment_details(paid_amount,payment_date,payment_method,ref_number,clint_id) VALUES ($topay,'$date','$payment_cat',$refn,'$_SESSION[clint_user_match]');";

                        if(mysqli_query($db,$sql_to_payment)){
                            ?>
                            <section>
                                <h2><pre>                                                                                                              Payment Confirmed</pre></h2><br><br><br><br><br><br><br><br><br><br><br><br>
                            </section>
                            <?php
                        }
                        else{?>
                            <section>
                                <h2><pre>                                                                                                              Payment Failed</pre></h2><br><br><br><br><br><br><br><br><br><br><br><br>
                                </section><?php
                            }
                            ?>
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