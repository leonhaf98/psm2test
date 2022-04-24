<?php  

include("database.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from sumbangan WHERE nama='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('viewuser.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  