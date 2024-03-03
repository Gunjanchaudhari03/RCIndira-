<?php
include 'database.php';
$idd=$_GET['id'];
$dquery="DELETE FROM feedback WHERE id=$idd";
$query=mysqli_query($conn,$dquery);
if($query=1)
      {
         ?>
         <script>
            alert("Date Deleted properly");
         </script><?php
         header('location:feedback.php');
      }
      else
      {
         ?>
         <script>alert("Date Not Deleted properly");
</script><?php
      }

?>