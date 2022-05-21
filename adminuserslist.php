<!DOCTYPE html>
<html lang="en">

<head>
<style>
table
{
border-width:2px;
border-color:pink;
}
</style>
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
include('database.php');
$query = "SELECT first_name, last_name, telnum, alamat, email, username, password FROM users";
$result = mysqli_query($conn, $query);
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
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style=" background-color:pink">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="adminpage.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Dashboard</span>
            </a>
          </li>
        

          <li class="nav-item">
            <a class="nav-link" href="testlog.php">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Hubungi kami</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Penyumbang</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="adminuserslist.php"> senarai penyumbang </a></li>
                <li class="nav-item"> <a class="nav-link" href="testlog.php"> Pendaftaran Pengguna</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">NGO</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="adminngolist.php"> Senarai NGO</a></li>
                <li class="nav-item"> <a class="nav-link" href="testlogngo.php"> Pendaftaran NGO</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Documentation</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="commentlist.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">Senarai Maklum Balas</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logoutngo.php">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title"style=" color:black;font-family:verdana">log keluar</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel" style="background-color: aliceblue;">
        <div class="content-wrapper" style="background-color:white ;">
          <div class="row">
          
          </div>
          <div class="row">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo"> 
              </div>
              <h4 style=" color:black;font-family:verdana">Senarai penyumbang terkini</h4>
              <div style = "position:relative; left:700px; top:2px;">
              <a href="testlog.php">Tambah Pengguna</a>
           </div>
              <h6 class="font-weight-light"> </h6>
              <div class="table-scrol">  
   
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

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table table-bordered table-hover table-striped " style="table-layout: relative; " >  
        <thead>  
        
        <tr>  
        <th ><a href="<?php echo sortorder('first_name'); ?>" class="sort">nama</a></th>
            <th ><a href="<?php echo sortorder('telnum'); ?>" class="sort">alamat</a></th>
            <th ><a href="<?php echo sortorder('alamat'); ?>" class="sort">emel</a></th>
            <th ><a href="<?php echo sortorder('email'); ?>" class="sort">no telefon</a></th>

            <th >padam</th>

        </tr>  
        </thead>  

        <?php  
        include("database.php");  
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
        $sql = "SELECT COUNT(*) AS cntrows FROM users";
        $result = mysqli_query($conn,$sql);
        $fetchresult = mysqli_fetch_array($result);
        $allcount = $fetchresult['cntrows'];

        $orderby = " ORDER BY id desc ";
        if(isset($_GET['order_by']) && isset($_GET['sort'])){
            $orderby = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
        }

        $sql = "SELECT * FROM users ".$orderby." limit $row,".$rowperpage;
        $result = mysqli_query($conn,$sql);
        $sno = $row + 1;
      
        while($fetch = mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.  
        {  
            $first_name=$fetch[1];  
            $last_name=$fetch[2];   
            $telnum=$fetch[3];
            $alamat=$fetch[4];
            $email=$fetch[5];
            $username=$fetch[6];
            $password=$fetch[7];
        ?>  
  
        <tr>  
          <!--here showing results in the table -->  
            <td><?php echo $first_name;  ?></td>   
            <td><?php echo $alamat;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $telnum;  ?></td> 

            <td><a href="deletepenyumbang.php?del=<?php echo $username?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
    <form method="post" action="">
        <div id="div_pagination" style="width: 30cm;">
            <input type="hidden" name="row" value="<?php echo $row; ?>">
            <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
            <input type="submit" class="button" name="but_prev" value="Sebelumnya" >
            <input type="submit" class="button" name="but_next" value="Seterusnya">
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

