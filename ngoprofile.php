<!DOCTYPE html>
<html lang="en">

<head>
<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v3 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fontss/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="csss/stylee.css">
	</head>
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
<?php
session_start();//important

$kataNama=$_SESSION["kataNama"];
$getInfo="SELECT * from ngo where kataNama='$kataNama'";
$con=mysqli_connect("localhost","root","","user");
$res=mysqli_query($con,$getInfo);
$row=mysqli_fetch_array($res);
mysqli_close($con);
?>

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
            <a class="nav-link" href="ngo.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title"style=" color:black">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title"style=" color:black">Laporan Sumbangan</span>
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
              <span class="menu-title"style=" color:black">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="logout.php"> Logout</a></li>
                <li class="nav-item"> <a class="nav-link" href="ngoprofile.php"> Profil NGO</a></li>
                <li class="nav-item"> <a class="nav-link" href="donatorlist.php"> Senarai Penyumbang</a></li>
                
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
        <div class="content-wrapper" style="background-color: aliceblue;">
          <div class="row">
          
          </div>
          <div class="row">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                
              </div>
              <h4>Profile NGO</h4>
              <h6 class="font-weight-light"> </h6>
              <form action="" method="POST">
					        <h3>Dibawah merupakan maklumat terkini anda</h3>
                <h3>..................................................................</h3>
					      <div class="form-group signup_form">
					
						    <div class="form-wrapper">
						  	<label for="">Nama </label>
						  	<div class="form-holder" >
                <i style="font-style: normal; font-size: 15px;"></i>            
								<input type="text" class="form-control" name="Nama" style="background-color:lightyellow;" value="<?php echo $row ['Nama']; ?>">
							  </div>
					  	  </div>
					      <div class="form-wrapper">
					  	  <label for="">negeri</label>
						  	<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;"></i>
								<input type="text" class="form-control" name="negeri"style="background-color:lightyellow;" value="<?php echo $row['negeri']; ?>">
						  	</div>
						   </div>
						    </div>

						   <div class="form-group signup_form">
					    	<div class="form-wrapper">
							  <label for="">emel</label>
							  <div class="form-holder">
                <i style="font-style: normal; font-size: 15px;"></i>
								<input type="email" class="form-control" name="emel"style="background-color:lightyellow;" value="<?php echo $row['emel']; ?>">
							  </div>
						    </div>
               <div class="form-wrapper">
							  <label for="">nombor telefon</label>
							  <div class="form-holder">
               <i style="font-style: normal; font-size: 15px;"></i>
								<input type="text" class="form-control" name="nomtel"style="background-color:lightyellow;" value="<?php echo $row['nomtel']; ?>">
					  		</div>
						    </div>
					  	  </div>
						    <div class="form-group signup_form">

						   </div>

					  	  <div class="form-group signup_form">
						    <div class="form-wrapper">
							  <label for="">nombor akaun</label>
							  <div class="form-holder">
                <i style="font-style: normal; font-size: 15px;"></i>
								<input type="text" class="form-control" name="nomakaun"style="background-color:lightyellow;" value="<?php echo $row['nomakaun']; ?>">
						  	</div>
					    	</div>
     
						   </div>
               <a button class="btn btn-primary btn-group-lg form_btn"href="update-actionngo.php?userid=<?php echo $row["ngo_id"]; ?>">Kemaskini</button> </a>

						    </div>
					  	  <div class="form-end">
					
					      	<div class="button-holder">
						
						
					      	</div>
						
					    </div>
				    </form>

                <!--div class="form-group" style="left: 100px;">

                <p>nama pertama </p>
                    <input type="text" value="<?php echo $row['Nama']; ?>">
                
                </div>
          
                <div class="form-group">
                <p>nama terakhir </p>
                    <input type="text" value="<?php echo $row['negeri']; ?>">
                
                </div>

                <div class="form-group">
                <p>alamat penyumbang </p>
                    <input type="text" value="<?php echo $row['emel']; ?>">
                
                </div>

                <div class="form-group">
                <p>nombor telefon </p>
                    <input type="text" value="<?php echo $row['nomtel']; ?>">
                
                </div>

                <div class="form-group">
                <p>emel </p>
                    <input type="email" value="<?php echo $row['nomakaun']; ?>">
                
                </div>

                <div class="form-group">
                <p>kata nama </p>
                    <input type="text" value="<?php echo $row['kataNama']; ?>">
                </div>

                <div class="form-group">

                <p>kata laluan</p>
                    <input type="text" value="<?php echo $row['password']; ?>">
                </div>

                <a href="mainpage.php">  
                <td><a href="update-actionngo.php?userid=<?php echo $row["ngo_id"]; ?>">Update</a></td>

                <div class="text-center mt-4 font-weight-light">
                  Kembali ke halaman utama  <a href="ngo.php" class="text-primary"></a>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
   
          <div class="row">
      
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              
            </div>
          </div>
        </div-->
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

