
<?php
session_start();
include 'database_coonect.php';
$cl_user_id = $_POST["cl_id"];
$cl_user_pass = $_POST["cl_pin"];

$sql = "SELECT clint_id,clint_password FROM clint_log;";
$result = mysqli_query($db,$sql);
$flag = 0;

if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
          if($cl_user_id==$row["clint_id"]){
               $flag = 1;
               if($cl_user_pass==$row["clint_password"]){
                    $_SESSION['clint_user_match']=$cl_user_id;
                    header("location: clientinfo.php?remarks=success");
                    break;
               }
               else{
                    header("location: loginForm_clint.html");
                    break;
               }       
          }
          else{
               $flag = 0;
          }
     }
     if($flag==0)
         header("location: loginForm_clint.html");
}
?>