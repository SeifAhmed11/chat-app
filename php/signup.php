<?php
   $showAlert = false; 
   $showError = false; 
   $exists=false;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
         
       // Include file which makes the
       // Database Connection.
       include 'config.php';   
       
       $username = $_POST["username"]; 
       $password = $_POST["password"]; 
               
       
       $sql = "Select * from user where username='$username'";
       
       $result = mysqli_query($conn, $sql);
       
       $num = mysqli_num_rows($result); 
       
       // This sql query is use to check if
       // the username is already present 
       // or not in our Database
       if($num == 0) {
               $hash = password_hash($password, 
                                   PASSWORD_DEFAULT);
                   
               // Password Hashing is used here. 
               $sql = "INSERT INTO `user` ( `username`, 
                   `password`) VALUES ('$username', 
                   '$hash')";
       
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                   $showAlert = true; 
               } 
       }// end if 
       
      if($num>0) 
      {
         $exists="Username not available"; 
      } 
       
   }//end if   
?>