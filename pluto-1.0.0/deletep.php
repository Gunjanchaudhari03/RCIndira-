<?php
include 'database.php';
$idd=$_GET['id'];
$dquery="DELETE FROM prospectiveform WHERE ID=$idd";
$query=mysqli_query($conn,$dquery);
if($query==1)
      {
         ?>
         <script>
            alert("Date Deleted properly");
         </script><?php
         header('location:prospective.php');
      }
      else
      {
         ?>
         <script>alert("Date Not Deleted properly");
</script><?php
      }

?>