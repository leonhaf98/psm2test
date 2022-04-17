<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', 
telnum='" . $_POST['telnum'] . "' ,alamat='" . $_POST['alamat'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>

Kemaskini dibawah <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">

<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
<br>

telnum:<br>
<input type="text" name="telnum" class="txtField" value="<?php echo $row['telnum']; ?>">
<br>

City:<br>
<input type="text" name="alamat" class="txtField" value="<?php echo $row['alamat']; ?>">
<br>

Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>