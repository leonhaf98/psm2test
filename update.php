<?php
session_start();
$con = mysqli_connect("localhost","root","","user");



    $id = $_POST['id'];
    $name = $_POST['first_name'];
    $lname= $_POST['last_name'];
    $tel = $_POST['telnum'];

    $query = "UPDATE users SET first_name='$name', last_name='$lname', telnum='$tel' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: userprofile.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: donator.php");
    }


?>