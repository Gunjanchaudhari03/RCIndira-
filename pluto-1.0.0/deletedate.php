<?php
include 'database.php';
$idd=$_GET['id'];
$dquery="DELETE FROM dateallocation WHERE ID=$idd";
$query=mysqli_query($conn,$dquery);
if($query)
      {
         ?>
         <script>
            alert("Date Deleted properly");
         </script><?php
         header('location:dateallocation.php');
      }
      else
      {
         ?>
         <script>alert("Date Not Deleted properly");
</script><?php
      }

?>