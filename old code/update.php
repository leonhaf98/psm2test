<?php  

include("database.php");  
$delete_id=$_GET['del']; 
$fname = $_GET['first_name'];
$lname = $_GET['last_name'];
$email = $_GET['email'];
$mobile = $_GET['telnum'];
$address = $_GET['alamat'];
$username = $_GET['username'];
$password = $_GET['password'];

$delete_query="UPDATE users set first_name='$fname', last_name='$lname'where username='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('viewuser.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  