<?php
include('database.php');
$query = "SELECT first_name, last_name, icnum, telnum, alamat, email FROM users";
$result = mysqli_query($conn, $query);
?>

<div class="topnav" id="myTopnav">
  <a href="mainpage.php" class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>last name</th>
    <th>ic number</th>
    <th>telefon number</th>
    <th>alamat</th>
    <th>email</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['first_name']; ?> </td>
   <td><?php echo $data['last_name']; ?> </td>
   <td><?php echo $data['icnum']; ?> </td>
   <td><?php echo $data['telnum']; ?> </td>
   <td><?php echo $data['alamat']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table