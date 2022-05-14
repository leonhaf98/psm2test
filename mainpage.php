<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 4.0s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
  <title>E-SUMBANGAN ONLINE</title>
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
            <strong><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown" style="color: black;"></strong>
              
              <img src="images/faces/log-in.png" alt="profile" style="width: 80px; height: 80px;">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="loginuser.php">
                <i class="ti-settings text-primary" style="font-family:verdana" ></i>
                Log Masuk Pengguna
              </a>
              <a class="dropdown-item" href="loginngo.php">
                <i class="ti-settings text-primary"></i>
                Login NGO
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
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style=" background-color:pink">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="mainpage.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title"style="font-family:verdana">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginuser.php">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title"style=" color:black; font-family:verdana">Sumbangan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Hubungi kami</span>
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Pendaftaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="testlogngo.php"> Pendaftaran NGO </a></li>
                <li class="nav-item"> <a class="nav-link" href="testlog.php"> Pendaftaran Pengguna</a></li>
                
              </ul>
            </div>
          </li>
          <!--li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"style=" color:black">testing</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="loginngo.php"> Log masuk ngo</a></li>
                <li class="nav-item"> <a class="nav-link" href="testlogngo.php"> Pendaftaran NGO</a></li>
              </ul>
            </div>
          </li-->

          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Dokumentasi</span>
            </a>
          </li>

         

          <li class="nav-item">
            <a class="nav-link" href="comment.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Maklum Balas</span>
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
                  <h4 class="font-weight-bold mb-0"style=" color:black;font-family:verdana"> HALAMAN UTAMA</h4>
                </div>
                <div>
                    <!--button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button-->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <h2></h2>
<p></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="1.jpg" width="1300" height="400">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="111.jpg" width="1300" height="400">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="a.png" width="1300" height="400">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">JUMLAH SUMBANGAN</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <p style="font-size: 1.875em;text-align:center;">    
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
                                      echo "RM:". $row['SUM(nilai)'];

                                      echo "<br>";
                                  }
                                  //close the connection
                                  
                                  $conn->close();
                                ?>
                                </p>
                    <!--h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">106500</h3-->
                  </div>  
                  
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
                                    $rowcountt = mysqli_num_rows( $result );
                                    
                                    // Display result
                                    
                                 }
                                  //close the connection
                                  
                                  $conn->close();
                                ?>
                  </div>  
                  <p style="font-size: 1.875em;text-align:center;"><?php echo $rowcountt;  ?></p>
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
                                    
                                 }
                                  //close the connection
                                  
                                  $conn->close();
                                  
                                ?>
                  </div>  
                  <p style="font-size: 1.875em;text-align:center;"><?php echo $rowcount;  ?></p>
                </div>
              </div>
             </div>
             <div class="col-md-3 grid-margin stretch-card">
     
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
  <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
</body>

</html>

