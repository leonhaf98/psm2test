<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        
          <div class="row">
		  <section class="ftco-section">
		<div class="container" style="background-color:white;">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!--h2 class="heading-section">Hubungi kami</h2-->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4 py-5">
									<h3 class="mb-4">Hubungi kami </h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Sila isikan maklum anda dibawah!
				      		</div>
									<form method="POST"  class="contactForm" style="color: aliceblue;">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nama" id="nama" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="emel" id="emel" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" name="message" id="message" cols="30" rows="6" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" name="submit" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
                          <?php
                            if(isset($_POST["submit"])){
                            include 'database.php';

                            $sql = "INSERT INTO contact (nama, emel, message)
                            VALUES ('".$_POST["nama"]."','".$_POST["emel"]."','".$_POST["message"]."')";

                            if ($conn->query($sql) === TRUE) {
                            echo "
                                <script type= 'text/javascript'>
                                    alert('maklumat anda telah berjaya di simpan');
                                </script>";
                            } 
                            else 
                            {
                                echo 
                                "<script type= 'text/javascript'>
                                    alert('Error: " . $sql . "<br>" . $conn->error."');
                                </script>";
                            }

                            $conn->close();
                            }
                            ?>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-md-5 p-4 py-5 img">
									<h3>Contact information</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>

