<?php
     session_start();
     
     if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "rcic";
      
      $conn = new mysqli($server, $user, $pass, $db);
      
      if($conn -> connect_errno)
      {
         echo "Database connection failed!<BR>";
         echo "Reason: ", $conn->connect_error;
         exit();
      }
      else
      {
        $fname = $_POST['fullname'];
        $mail = $_POST['utr'];
        $subject = $_POST['amt']; 
        $message = $_POST['purpose'];    
        $sql = "INSERT INTO donation (fullname,utr,amt,purpose)
                                   VALUES ('$fname', '$mail', '$subject','$message')";
         $q=$conn->query($sql);
         if($q)
         {
            echo "Registration done successfully!";
            header('location:index.html');
            
            // block of code, to process further...
         }
         else
         {
            echo "Something went wrong while registration!<BR>";
            echo "Error Description: ", $conn -> error;
         }
      }
   }
    
  // $conn -> close();
?>