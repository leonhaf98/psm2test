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
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $icnum =  $_REQUEST['icnum'];
        $telnum = $_REQUEST['telnum'];
        $alamat = $_REQUEST['alamat'];
        $email = $_REQUEST['email'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users  VALUES ('$first_name', 
            '$last_name','$icnum','$telnum','$alamat','$email')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a successfully.</h3>";
            echo nl2br("\n$first_name\n $last_name\n "
                . "$icnum\n $telnum\n $alamat\n $email");
                header("Location:index.php");    
               
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