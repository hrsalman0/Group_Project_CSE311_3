<?php

include 'database_coonect.php';
session_start();
$adminID = $_SESSION['userm'];

$first_name_clint = $_POST["firstname"];
$lastname_name_clint = $_POST["lastname"];
$birthday_clint = $_POST["birthday"];
$nid_clint = $_POST["nid"];
$emailclint = $_POST["email_clint"];
$phonenum_clint = $_POST["phone_num"];
$clintid_no = $_POST["clintid"];
$psw_clint = $_POST["psw"];
$pack = $_POST["package_no"];

$address1 = $_POST["addressline"];
$dist_name = $_POST["dist_name"];
$sub_dis = $_POST["sub_dis"];
$regionname = $_POST["region_name"];
$postal = $_POST["postal"];
$divition_name = $_POST["divition_name"];

$sql_to_clint_info = "INSERT INTO clint_info(clint_id, first_name, last_name, birthdate, clint_nid, clint_email, clint_phone, admin_id,packageID) VALUES ('$clintid_no','$first_name_clint','$lastname_name_clint','$birthday_clint',$nid_clint,'$emailclint',$phonenum_clint,'$adminID','$pack')";

$sql_to_clint_log = "INSERT INTO clint_log(clint_id, clint_password) VALUES ('$clintid_no',$psw_clint)";

$sql_to_clint_address = "INSERT INTO clint_address(clint_id, address_line, district, sub_district, region, postal,divition) VALUES ('$clintid_no','$address1','$dist_name','$sub_dis','$regionname',$postal,'$divition_name')";

if(mysqli_query($db,$sql_to_clint_info)){
    mysqli_query($db,$sql_to_clint_log);
    mysqli_query($db,$sql_to_clint_address);
    header("location: signup_confirm.html");
}

else
    header("location: clintsignform.html");

?>