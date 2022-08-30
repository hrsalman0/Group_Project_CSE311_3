
<?php
session_start();
include 'database_coonect.php';
$emp_user_id = $_POST["emp_id"];
$emp_user_pass = $_POST["emp_pin"];

$sql = "SELECT emp_user,emp_pass FROM employee_log";
$result = mysqli_query($db,$sql);
$flag = 0;

if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
          if($emp_user_id==$row["emp_user"]){
               $flag = 1;
               if($emp_user_pass==$row["emp_pass"]){
                    $_SESSION['emp_user_match']=$emp_user_id;
                    header("location: employeeinfo.php?remarks=success");
                    break;
               }
               else{
                    header("location: loginForm_emp.html");
                    break;
               }       
          }
          else{
               $flag = 0;
          }
     }
     if($flag==0)
         header("location: loginForm_emp.html");
}
?>