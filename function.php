<?php
require"db.php";
if(isset($_POST['email'])){
   $email = mysqli_real_escape_string($conn,$_POST['email']);

   $query = "select count(*) as count_email from user where email='".$email."'";

   $result = mysqli_query($conn,$query);
   $response = "Available.";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['count_email'];
    
      if($count > 0){
          $response = "Not Available.";
      }
   
   }
   echo $response;
   exit();
}
?>