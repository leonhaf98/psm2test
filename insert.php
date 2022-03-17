<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => 
        $conn = mysqli_connect("localhost", "root", "", "user");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        //$id =  $_REQUEST['id'];
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $telnum = $_REQUEST['telnum'];
        $alamat = $_REQUEST['alamat'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $katalaluan = $_REQUEST['katalaluan'];
          
        // Performing insert query execution
        // here our table name is college

        
        $sql = "INSERT INTO users  VALUES ('$id','$first_name', 
            '$last_name','$telnum','$alamat','$email','$username','$katalaluan')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a successfully.</h3>";
            echo nl2br("$id\n $first_name\n $last_name\n "
                . "$telnum\n $alamat\n $email\n $username\n $katalaluan");
                header("Location:mainpage.php");    
               
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>