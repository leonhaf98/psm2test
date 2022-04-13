<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form action="insertngo.php"  method="post">

                <div class="form-group">
                  <input type="text" name="Nama" id="firstName" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="name">
                </div>
          
                <div class="form-group">
                  <input type="text" name="kataNama" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="username name">
                </div>

                <div class="form-group">
                  <input type="Password" name="KataLaluan" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="password">
                </div>

                <div class="form-group">
                  <input type="text" name="negeri" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="negeri">
                </div>

                <div class="form-group">
                  <input type="email" name="emel" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="email">
                </div>
                <div class="form-group">
                  <input type="text" name="nomtel" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="nombor telefon">
                </div>
                <div class="form-group">
                  <input type="text" name="nomakaun" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="nombor akaun bank">
                </div>
                <a href="mainpage.php">  
                <input type="submit" value="Hantar" style = "position:relative; left:80px; top:2px;">

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="mainpage.php" class="text-primary">Login</a>
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
