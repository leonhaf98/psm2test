<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where email='$email' and password='md5($pass)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name'];
        $_SESSION["Email"]=$row['Email']; 
        header("Location: mainpage.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>