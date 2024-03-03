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
        $fname = $_POST['nme'];
        $subject = $_POST['msg'];    
        $sql = "INSERT INTO feedback (nme,msg)
                  VALUES ('$fname', '$subject')";
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