<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TESTING</title>
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
<body>
  <div class="container-scroller">
  
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="mainpage.php"><img src="images/logo-mini.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="mainpage.php"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-flex page-body-wrapper-fixed">
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
      
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
          <!DOCTYPE html>
          <?php require_once("database.php"); ?>
            <html>
            <body>
            <div class="container">
            <div class="row">
              <div class="col-sm-4">
              </div>
            
              <div class="col-sm-4">
              </div>
            </div>
            <div class="row">
                <?php 
                if(isset($_POST['signup'])){
                  extract($_POST);
                  if(strlen($Nama)<3){ // Minimum 
                      $error[] = 'Please enter First Name using 3 charaters atleast.';
                        }
                if(strlen($Nama)>100){  // Max 
                      $error[] = 'nama: Maksimum adalah tidak lebih 100 character';
                        }
                if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $Nama)){
                            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
                        }    
              
          
                      if(strlen($kataNama)<3){ // Change Minimum Lenghth   
                            $error[] = 'Please enter Username using 3 charaters atleast.';
                        }
                  if(strlen($kataNama)>20){ // Change Max Length 
                            $error[] = 'Username : Max length 50 Characters Not allowed';
                        }
               
                if(strlen($emel)>50){  // Max 
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
                          $sql="SELECT * from ngo where (password='$password' or emel='$emel');";
                      $res=mysqli_query($conn,$sql);
                  if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);

                    if($kataNama==$row['kataNama'])
                    {
                          $error[] ='Username alredy Exists.';
                          } 
                      if($emel==$row['emel'])
                      {
                            $error[] ='Email alredy Exists.';
                          } 
                      }
                        if(!isset($error)){ 
                            $result = mysqli_query($conn,"INSERT into ngo(Nama,kataNama,password,negeri,emel,nomtel,nomakaun) 
                            values('$Nama','$kataNama','$password','$negeri','$emel','$nomtel','$nomakaun')");
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

                    <div class="col-sm-4">
                    
                <?php 
                  if(isset($error)){ 
                foreach($error as $error){ 
                  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
                }
                }
                ?>
                    </div>
                    <div class="col-sm-4">
                      <?php if(isset($done)) 
                      { ?>
    <div class="successmsg"><span style="font-size:50px;">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here... </a> </div>
      <?php } else { ?>
       <div class="signup_form">
		<form action="" method="POST">
      <p>  </p>
      <p> SILA ISI MAKLUMAT DIBAWAH </p>
  <div class="form-group" style="width:10cm;">
    <label class="label_txt">Nama persatuan</label>
    <input type="text" class="form-control" name="Nama"style="width:10cm; background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['Nama'];}?>" required="">
    </div>

  <div class="form-group"style="width:10cm;">
    <label class="label_txt">emel ngo </label>
    <input type="email" class="form-control" name="emel"style="width:10cm; background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['emel'];}?>" required="">
  </div>
 
<div class="form-group"style="width:10cm;">
    <label class="label_txt">negeri</label>
    <input type="text" class="form-control" name="negeri"style="width:10cm; background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['negeri'];}?>" required="">
  </div>

<div class="form-group"style="width:10cm;">
    <label class="label_txt">nombor telefon </label>
    <input type="text" class="form-control" name="nomtel"style="width:10cm; background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['nomtel'];}?>" required="">
  </div>

<div class="form-group"style="width:10cm;">
    <label class="label_txt">nombor akaun </label>
    <input type="telnum" class="form-control" name="nomakaun"style="width:10cm; background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['nomakaun'];}?>" required="">
  </div>
 <div class="form-group" style="width:10cm;">
    <label class="label_txt">kata nama</label>
    <input type="text" class="form-control" name="kataNama"style="width:10cm; background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['kataNama'];}?>" required="">
    </div>


  <div class="form-group"style="width:10cm;">
    <label class="label_txt">Kata laluan </label>
    <input type="password" name="password"style="width:10cm; background-color:lightyellow;" class="form-control" required="">
  </div>

   <div class="form-group"style="width:10cm;">
    <label class="label_txt"> pengesahan kata laluan </label>
    <input type="password" name="passwordConfirm" style="width:10cm; background-color:lightyellow;"class="form-control" required="">
  </div>

  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn" 
        style = "position:relative; left:80px; top:2px;">Daftar!</button>
        <p> </p>
   <p>Sudah ada akaun? sila klik butang sebelah <a href="mainpage.php">Log masuk</a> </p>
</form>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
            </div>
          </div>
          <div class="row">
        
          <div class="row">
      
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

