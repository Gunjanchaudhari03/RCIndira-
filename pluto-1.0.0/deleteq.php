<?php
include 'database.php';
$idd=$_GET['id'];
$dquery="DELETE FROM queries WHERE id=$idd";
$query=mysqli_query($conn,$dquery);
if($query)
      {
         ?>
         <script>
            alert("Date Deleted properly");
         </script><?php
         header('location:queries.php');
      }
      else
      {
         ?>
         <script>alert("Date Not Deleted properly");
</script><?php
      }

?>