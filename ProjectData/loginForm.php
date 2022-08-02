 <?php
      $db = mysqli_connect("localhost","root","","com_database_project");
      $user_id = $_POST["user"];
      $user_pass = $_POST["pass"];

      $sql = "SELECT user,pass FROM admin_log";
      $result = mysqli_query($db,$sql);
      $flag = 0;

      if(mysqli_num_rows($result)>0){
          while ($row = mysqli_fetch_assoc($result)) {
               if($user_id==$row["user"]){
                    $flag = 1;
                    if($user_pass==$row["pass"]){
                         echo "Login Confirmed";
                         break;
                    }
                    else{
                         echo "Wrong Password";
                         break;
                    }       
          }
          else{
                    $flag = 0;
               }
      }
      if($flag==0)
      echo "User ID Wrong";

 }
    ?>