<?php
// Include database connection file
require_once "database.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE ngo set  Nama='" . $_POST['Nama'] . "', nomtel='" . $_POST['nomtel'] . "' ,emel='" . $_POST['emel'] . "' WHERE ngo_id='" . $_POST['ngo_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM ngo WHERE ngo_id='" . $_GET['userid'] . "'");
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
<input type="text" name="Nama" class="form-control" value="<?php echo $row["Nama"]; ?>">
</div>
<div class="form-group ">
<label>Email</label>
<input type="email" name="emel" class="form-control" value="<?php echo $row["emel"]; ?>">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="mobile" name="nomtel" class="form-control" value="<?php echo $row["nomtel"]; ?>">
</div>
<input type="hidden" name="ngo_id" value="<?php echo $row["ngo_id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">

<p>Sudah ada edit? sila klik link ini untuk kembali ke paparan profil <a href="ngoprofile.php">profile</a> </p>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>