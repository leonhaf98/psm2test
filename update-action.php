<?php
// Include database connection file
require_once "database.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set  first_name='" . $_POST['first_name'] . "' ,alamat='" . $_POST['alamat'] . "' ,telnum='" . $_POST['telnum'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="first_name" class="form-control" value="<?php echo $row["first_name"]; ?>">
</div>


<div class="form-group ">
<label>nombor telefon</label>
<input type="text" name="telnum" class="form-control" value="<?php echo $row["telnum"]; ?>">
</div>

<div class="form-group">
<label>alamat</label>
<input type="text" name="alamat" class="form-control" value="<?php echo $row["alamat"]; ?>">
</div>
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">

<p>Sudah ada edit? sila klik link ini untuk kembali ke paparan profil <a href="userprofile.php">profile</a> </p>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>