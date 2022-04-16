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
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar"style=" background-color:pink">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="donator.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title"style=" color:black">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="derma.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title"style=" color:black">Sumbangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/themify.html">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title"style=" color:black">Tentang kami</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"style=" color:black">Halaman akaun</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="logout.php"> Logout</a></li>
                <li class="nav-item"> <a class="nav-link" href="userprofile.php"> Profil Pengguna</a></li>
                <li class="nav-item"> <a class="nav-link" href="ngolist.php"> Senarai NGO</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0" style="width: 100px;"> Derma</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="width:500px ;">
            
              <h4>Sumbangan</h4>
              <h6 class="font-weight-light">Sila Isi Maklumat Yang diperlukan diruangan tersebut</h6>
              <form action="insertngo.php"  method="post">

                <div class="form-group" >
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
                <a href="donator.php">  
                <input type="submit" value="Hantar" style = "position:relative; left:100px; top:2px;">

                <div class="mb-4">
                  <div class="form-check">
            
                  </div>
                </div>
                <!--div class="text-center mt-4 font-weight-light">
                  halaman utama<a href="donator.php" class="text-primary"></a>
                </div-->
              </form>
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
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></a> test</span>
          </div>
        </footer>
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

