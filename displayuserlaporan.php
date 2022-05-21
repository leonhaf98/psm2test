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

$username=$_SESSION["username"];
$getInfo="SELECT * from users where username='$username'";
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
            <a class="nav-link" href="reportuser.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black">laporan sumbangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="displayuserlaporan.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black">test sumbang</span>
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
        <div class="content-wrapper" style="background-color: aliceblue;">
          <div class="row">
          
          </div>
          <div class="row">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                
              </div>
              
              <h6 class="font-weight-light"> </h6>
              <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Jumlah sumbangan dibuat</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                <?php
                                        

                                        $username=$_SESSION["username"];
                                        $getInfo="SELECT * from users where username='$username'";
                                        $con=mysqli_connect("localhost","root","","user");
                                        $res=mysqli_query($con,$getInfo);
                                        $row=mysqli_fetch_array($res);
                                        mysqli_close($con);
                                        ?>
                                    <input type="hidden" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} echo $row['id'];?>" class="form-control">
                                </div>
                                <div class="col-md-4"> 
                                  <button type="submit" style="float:right; margin-right:12px;" class="btn btn-primary"><i class="mdi mdi-home me-2">Paparkan!</button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php
                                    include("database.php");

                                    $rowperpage = 5;
                                    $row = 0;

                                    // Previous Button
                                    if(isset($_POST['but_prev'])){
                                        $row = $_POST['row'];
                                        $row -= $rowperpage;
                                        if( $row < 0 ){
                                            $row = 0;
                                        }
                                    }

                                    // Next Button
                                    if(isset($_POST['but_next'])){
                                        $row = $_POST['row'];
                                        $allcount = $_POST['allcount'];

                                        $val = $row + $rowperpage;
                                        if( $val < $allcount ){
                                            $row = $val;
                                        }
                                    }

                                    // generating orderby and sort url for table header
                                    function sortorder($fieldname){
                                        $sorturl = "?order_by=".$fieldname."&sort=";
                                        $sorttype = "asc";
                                        if(isset($_GET['order_by']) && $_GET['order_by'] == $fieldname){
                                            if(isset($_GET['sort']) && $_GET['sort'] == "asc"){
                                                $sorttype = "desc";
                                            }
                                        }
                                        $sorturl .= $sorttype;
                                        return $sorturl;
                                    }
                                    ?>

                                    <?php 
                                    $con = mysqli_connect("localhost","root","","user");
                                    if(isset($_GET['stud_id']))
                                    {
                                        
                                        $orderby = " ORDER BY tarikh_sumbang asc ";
                                        if(isset($_GET['order_by']) && isset($_GET['sort'])){
                                            $orderby = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
                                        }

                                        $stud_id = $_GET['stud_id'];
                                        $query = "SELECT * FROM sumbangan WHERE users_id='$stud_id'".$orderby." limit $row,".$rowperpage;
                                       
                                        $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run))
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>  
                                                <div class="table-responsive">      
                                                <table class="table table-bordered table-hover table-striped " style="table-layout:fixed; " >  
                                                
                                                    <td>NGO :<?php echo $row['nama_ngo'];?></td>
                                                    <td><?php echo $row['nomtel'];?></td>
                                                    <td>RM<?php echo $row ['nilai'];?></td>
                                                    <td><?php echo $row['tarikh_sumbang'];?></td>  
                                                </table>  
                                            </div>
                                                <?php
                                            }
                                        }
                                    }
                                   
                                 ?>
  
                        <!--a class="btn btn-success" href="donator.php"><i class="mdi mdi-home me-2"></i>Kembali ke halaman utama Halaman Utama</a-->
                            </div>
                        </div>

                    </div>
                </div>
       

                <a href="mainpage.php">  
                
                <!--a style="left: 100px;" href="update-action.php?userid=<?php echo $row["id"]; ?>">Update</a-->

                <div class="text-center mt-4 font-weight-light">
                <a class="btn btn-success" href="donator.php"><i class="mdi mdi-home me-2"></i>Kembali ke halaman utama Halaman Utama</a>
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

