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
                        <h4>How to Fetch Data by ID in Textbox using PHP MySQL</h4>
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
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","user");

                                    if(isset($_GET['stud_id']))
                                    {
                                        

            
                                        $stud_id = $_GET['stud_id'];
                                        $query = "SELECT * FROM sumbangan WHERE users_id='$stud_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run))
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                
                                              
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['nama']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Nama ngo</label>
                                                    <input type="text" value="<?= $row['nama_ngo']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone No</label>
                                                    <input type="text" value="<?= $row['nomtel']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">nombor akaun</label>
                                                    <input type="text" value="<?= $row['nomakaun']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Nilai</label>
                                                    <input type="text" value=" RM<?= $row['nilai']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

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