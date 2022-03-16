<?php
include("fetch.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Full Name</th>
         <th>Gender</th>
         <th>Email</th>
         <th>Mobile Number</th>
         <th>Address</th>
         <th>City</th>
         <th>State</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['first_name']??''; ?></td>
      <td><?php echo $data['last_name']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="5">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>