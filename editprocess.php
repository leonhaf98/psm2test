<?php
include_once("database.php");
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$name = mysqli_real_escape_string($mysqli, $_POST['first_name']);
$age = mysqli_real_escape_string($mysqli, $_POST['telnum']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
if(empty($name) || empty($age) || empty($email)) {	
if(empty($name)) {
echo '<font color="red">Name field is empty.</font><br>';
}
if(empty($age)) {
echo '<font color="red">Age field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">Email field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($mysqli, "UPDATE users SET first_name='$name',telnum='$age',email='$email' WHERE id=$id");
header("Location: donator.php");
}
}
?>