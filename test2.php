<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOG MASUK PENYUMBANG</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter Last Name using 3 charaters atleast.';
        }
if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
      if(strlen($username)<3){ // Change Minimum Lenghth   
            $error[] = 'Please enter Username using 3 charaters atleast.';
        }
  if(strlen($username)>50){ // Change Max Length 
            $error[] = 'Username : Max length 50 Characters Not allowed';
        }
  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
            $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
        }  
if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from users where (username='$username' or email='$email');";
      $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($username==$row['username'])
     {
           $error[] ='Username alredy Exists.';
          } 
       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
            $result = mysqli_query($conn,"INSERT into users(first_name,last_name,username,email,telnum,alamat,password) values('$fname','$lname','$username','$email','$telnum','$alamat','$password')");
           if($result)
           
    {
        header("Location:mainpage.php"); 
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>

		 
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
<body>
    
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                
              </div>
              <h4>Pendaftaran akaun baru </h4>
              <h6 class="font-weight-light">Sila masukkan maklumat yang diperlukan dibawah </h6>
              <form action="insertngo.php"  method="post">

                <div class="form-group">
                <label class="label_txt">Nama pertama</label>
                <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
                </div>
          
                <div class="form-group">
                    <label class="label_txt">Nama terakhir </label>
                    <input type="text" class="form-control" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required="">
                </div>

                <div class="form-group">
                    <label class="label_txt">Username </label>
                    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>" required="">
                </div>

                <div class="form-group">
                    <label class="label_txt">Email </label>
                    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
                </div>

               <div class="form-group">
                    <label class="label_txt">nombor telefon </label>
                    <input type="telnum" class="form-control" name="telnum" value="<?php if(isset($error)){ echo $_POST['telnum'];}?>" required="">
                </div>

               <div class="form-group">
                     <label class="label_txt">alamat </label>
                    <input type="alamat" class="form-control" name="alamat" value="<?php if(isset($error)){ echo $_POST['alamat'];}?>" required="">
                </div>

                <div class="form-group">
                    <label class="label_txt">Kata laluan </label>
                    <input type="password" name="password" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label class="label_txt"> pengesahan kata laluan </label>
                    <input type="password" name="passwordConfirm" class="form-control" required="">
                </div>
                <a href="mainpage.php">  
                <input type="submit" value="Hantar" style = "position:relative; left:100px; top:2px;">

     
                <div class="text-center mt-4 font-weight-light">
                  Sudah ada akaun? sila klik pautan ini <a href="mainpage.php" class="text-primary">log masuk</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
