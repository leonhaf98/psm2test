<?php
include('database.php');
$query = "SELECT first_name, last_name, telnum, alamat, email, username, password FROM users";
$result = mysqli_query($conn, $query);
?>

<div class="topnav" id="myTopnav">
  <a href="mainpage.php" class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<table border ="1" cellspacing="0" cellpadding="10">
  <td>
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>last name</th>
    <th>telefon number</th>
    <th>alamat</th>
    <th>email</th>
    <th>username</th>
    <th>password</th>
  </tr>
  </td>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['first_name']; ?> </td>
   <td><?php echo $data['last_name']; ?> </td>
   <td><?php echo $data['telnum']; ?> </td>
   <td><?php echo $data['alamat']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['username']; ?> </td>
   <td><?php echo $data['password']; ?> </td>
   <td><a href="Delete.php?del=<?php echo $username ?>"><button class="btn btn-danger">Delete</button></a></td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table