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
<?php
//include auth.php file on all secure pages
include("auth.php");
?>
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
            <a class="nav-link">
              <i class=""></i>
              <span class="menu-title"style=" color:black;font-family:verdana">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donator.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Dashboard</span>
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
              <span class="menu-title"style=" color:black;font-family:verdana">Tentang kami</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Halaman akaun</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <!--li class="nav-item"> <a class="nav-link" href="logout.php"> Logout</a></li-->
                <li class="nav-item"> <a class="nav-link" href="userprofile.php"> Profil Pengguna</a></li>
                <li class="nav-item"> <a class="nav-link" href="ngolist.php"> Senarai NGO</a></li>
                <!--li class="nav-item"> <a class="nav-link" href="edits.php"> update</a></li-->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black">laporan sumbangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Log keluar</span>
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
                  <h4 class="font-weight-bold mb-0"><p style="font-size: larger;">SELAMAT DATANG <?php echo $_SESSION['username']; ?>!</p></span> </h4>
                </div>
                <div>
                   
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Sumbangan</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <?php
                                  //servername
                                  $servername = "localhost";
                                  //username
                                  $username = "root";
                                  //empty password
                                  $password = "";
                                  //geek is the database name
                                  $dbname = "user";
                                  
                                  // Create connection by passing these connection parameters
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                             
                                  //sql query
                                  $sql = "SELECT  SUM(nilai) from sumbangan";
                                  $result = $conn->query($sql);
                                  //display data on web page
                                  while($row = mysqli_fetch_array($result)){
                                      echo "RM ". $row['SUM(nilai)'];

                                      echo "<br>";
                                  }
                                  //close the connection
                                  
                                  $conn->close();
                                ?>
                  </div>  
                  <p class="mb-0 mt-2 text-danger"><span class="text-black ms-1"><small></small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Penyumbang</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <?php
                                  //servername
                                  $servername = "localhost";
                                  //username
                                  $username = "root";
                                  //empty password
                                  $password = "";
                                  //geek is the database name
                                  $dbname = "user";
                                  
                                  // Create connection by passing these connection parameters
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                             
                                  //sql query 
                                  $sql = "SELECT * from users";
                                  $result = $conn->query($sql);
                                  if ($result = mysqli_query($conn, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                    
                                    // Display result
                                    echo "Jumlah berdaftar:" .$rowcount;
                                 }
                                  //close the connection
                                  
                                  $conn->close();
                                ?>
                  </div>  
             
                </div>
              </div>
             </div>
             <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">NGO Berdaftar</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <?php
                                  //servername
                                  $servername = "localhost";
                                  //username
                                  $username = "root";
                                  //empty password
                                  $password = "";
                                  //geek is the database name
                                  $dbname = "user";
                                  
                                  // Create connection by passing these connection parameters
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                             
                                  //sql query 
                                  $sql = "SELECT * from ngo";
                                  $result = $conn->query($sql);
                                  if ($result = mysqli_query($conn, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                    
                                    // Display result
                                    echo "Jumlah NGO : " .$rowcount;
                                 }
                                  //close the connection
                                  
                                  $conn->close();
                                ?>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><span class="text-black ms-1"><small></small></span></p>
                </div>
              </div>
             </div>
          </div>
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Info laman web ini</p>
                  <p class="text-muted font-weight-light"> 1.4 Objektif projek
                                Objektif projek ini adalah yang seperti berikut:</p>

                                <p>(a) Untuk mengenal pasti keperluan pengguna bagi Sistem Sumbangan Bantuan 
                                Kepada Mangsa Banjir (My E-Bantuan) dalam menyalurkan bantuan wang
                                ringgit kepada mangsa.</p>
                                <p>(b) Untuk membangunkan dan mereka bentuk Sistem Sumbangan Bantuan 
                                Kepada Mangsa Banjir (My E- Bantuan) yang mempunyai fungsi untuk 
                                menguruskan wang bantuan kepada mangsa banjir.</p>
                                <p>(c) Untuk menguji kefungsian Sistem Sumbangan Bantuan Kepada Mangsa Banjir 
                                (My E-Bantuan) mengikut keperluan pengguna.</p>
                    </p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">Purchases</p>
                  <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="me-5 mt-3">
                      <p class="text-muted">Status</p>
                      <h3>362</h3>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">New users</p>
                      <h3>187</h3>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Chats</p>
                      <h3>524</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Feedbacks</p>
                      <h3>509</h3>
                    </div> 
                  </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
              </div>
            </div>
          </div>
        
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
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best  dashboard </a> test</span>
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

