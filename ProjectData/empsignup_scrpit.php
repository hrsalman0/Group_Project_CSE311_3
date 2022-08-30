<?php

include 'database_coonect.php';

session_start();
$adminID = $_SESSION['userm'];

$first_name_emp = $_POST["firstname"];
$lastname_name_emp = $_POST["lastname"];
$birthday_emp = $_POST["birthday"];
$nid_emp = $_POST["nid"];
$gender_emp = $_POST["gender"];
$emailemp = $_POST["email_emp"];
$phonenum = $_POST["phone_num"];
$salaryemp = $_POST["salary_emp"];
$emp_id = $_POST["empid"];
$psw_emp = $_POST["psw"];
$emp_job = $_POST["job_role"];

    //Address
$vill_name = $_POST["vill_name"];
$post_off = $_POST["post_off"];
$police_st = $_POST["police_st"];
$dist_name = $_POST["dist_name"];
$sub_dis = $_POST["sub_dis"];
$postal = $_POST["postal"];
$divition_name = $_POST["divition_name"];

    //Emergency Contact
$emg_name = $_POST["emg_name"];
$relation_status = $_POST["relation_status"];
$emg_phone_number = $_POST["emg_phone_number"];

$sql_to_info = "INSERT INTO employee_info(emp_user,first_name, last_name,birth_date,emp_nid, emp_gender,emp_email, emp_phone, emp_salary, admin_user) VALUES ('$emp_id','$first_name_emp','$lastname_name_emp','$birthday_emp',$nid_emp,'$gender_emp','$emailemp',$phonenum,$salaryemp,'$adminID');";

$sql_to_log = "INSERT INTO employee_log(emp_user,emp_pass) VALUES ('$emp_id',$psw_emp);";

$sql_to_address = "INSERT INTO employee_address(emp_user, village_name, post_office, police_station, district, sub_district, postal_zip, divition) VALUES ('$emp_id','$vill_name','$post_off','$police_st','$dist_name','$sub_dis',$postal,'$divition_name')";

$sql_to_emg = "INSERT INTO employee_emg(emp_user, emg_name, relation, emg_phone) VALUES ('$emp_id','$emg_name','$relation_status',$emg_phone_number);";

$sql_to_role = "INSERT INTO employee_role(emp_user, emp_salary, emp_job_role) VALUES ('$emp_id',$salaryemp,'$emp_job')";

if(mysqli_query($db,$sql_to_info)){
   mysqli_query($db,$sql_to_log);
   mysqli_query($db,$sql_to_address);
   mysqli_query($db,$sql_to_emg);
   mysqli_query($db,$sql_to_role);
   header("location: signup_confirm.html");
}

else
   header("location: newclientandemployee.html");
?>