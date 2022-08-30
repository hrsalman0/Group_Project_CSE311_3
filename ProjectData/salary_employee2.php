 <?php
 include 'database_coonect.php';
 session_start();

 $payment_cat = $_POST["package_no"];
 $empid = $_POST["divition_name"];
 $adminID = $_SESSION['userm'];

 //echo $empid;
 //echo $_SESSION['userm'];
 
 $empid2 = NULL;
 $sql = "SELECT emp_user FROM employee_log WHERE emp_user = '$empid';";
 $result = mysqli_query($db,$sql);
 $amount_to_pay = 0;

 if(mysqli_num_rows($result)>0){
   while ($row = mysqli_fetch_assoc($result)) {
    $empid2 = $row["emp_user"];
}     
}

if($empid == $empid2){
    $sql_get_emp_amount = "SELECT emp_salary FROM employee_role WHERE emp_user =  '$empid';";      
    $result2 = mysqli_query($db,$sql_get_emp_amount);
    if(mysqli_num_rows($result2)>0){
        while($row2 = mysqli_fetch_assoc($result2)){
            $amount_to_pay = $row2["emp_salary"];
        }
        $date = date('y-m-d');
        $sql_give_salary = "INSERT INTO employee_salary(payment_amount,emp_id,payment_date,admin_id) VALUES ($amount_to_pay,'$empid2','$date','$adminID')";

        if(mysqli_query($db,$sql_give_salary)){
            header("location: salary_confirm.html");
        }
    }
}
else{
 header("location: salary_employee.php");
}
?>
