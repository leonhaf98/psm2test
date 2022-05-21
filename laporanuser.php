<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Jumlah sumbangan dibuat</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                <?php
                                        session_start();//important

                                        $username=$_SESSION["username"];
                                        $getInfo="SELECT * from users where username='$username'";
                                        $con=mysqli_connect("localhost","root","","user");
                                        $res=mysqli_query($con,$getInfo);
                                        $row=mysqli_fetch_array($res);
                                        mysqli_close($con);
                                        ?>
                                    <input type="hidden" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} echo $row['id'];?>" class="form-control">
                                </div>
                                <div class="col-md-4"> Sila klik butang ini untuk papar 
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
                                                <table class="table table-bordered table-hover table-striped " style="table-layout: fixed; " >  
                                                    <td><?php echo $row['nama_ngo'];?></td>
                                                    <td><?php echo $row['nomtel'];?></td>
                                                    <td><?php echo $row['nilai'];?></td>
                                                    <td><?php echo $row['tarikh_sumbang'];?></td>  
                                                </table>  
                                                
                                                <?php
                                            }
                                        }
                                    }
                                   
                                 ?>
  
                        <a class="btn btn-success" href="donator.php"><i class="mdi mdi-home me-2"></i>Kembali ke halaman utama Halaman Utama</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>