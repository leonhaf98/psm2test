<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
  
<body>  
<div class="topnav" id="myTopnav">
  <a href="mainpage.php" class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> 
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>first name</th>  
            <th>last Name</th>  
            <th>number ic</th>  
            <th>telefon number</th>  
            <th>alamat</th>
            <th>email</th>
            <th>username</th> 
            <th>password</th>   
        </tr>  
        </thead>  
  
        <?php  
        include("database.php");  
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $first_name=$row[0];  
            $last_name=$row[1];  
            $icnum=$row[2];  
            $telnum=$row[3];
            $alamat=$row[4];
            $email=$row[5];
            $username=$row[6];
            $password=$row[7];

        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $first_name;  ?></td>  
            <td><?php echo $last_name;  ?></td>  
            <td><?php echo $icnum;  ?></td>  
            <td><?php echo $telnum;  ?></td> 
            <td><?php echo $alamat;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $username;  ?></td>
            <td><?php echo $password;  ?></td>
            <td><a href="Delete.php?del=<?php echo $username ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
  
</html> 