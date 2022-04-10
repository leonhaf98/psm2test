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
        $Nama =  $_REQUEST['Nama'];
        $kataNama = $_REQUEST['kataNama'];
        $KataLaluan = $_REQUEST['KataLaluan'];
        $negeri = $_REQUEST['negeri'];
        $emel  = $_REQUEST['emel'];
        $nomtel = $_REQUEST['nomtel'];
        $nomakaun = $_REQUEST['nomakaun'];
          
        // Performing insert query execution
        // here our table name is 

        
        $sql = "INSERT INTO ngo  VALUES ('$ngo_id','$Nama', 
            '$kataNama','$KataLaluan','$negeri','$emel','$nomtel','$nomakaun')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a successfully.</h3>";
            echo nl2br("$ngo_id\n $Nama\n $kataNama\n "
                . "$KataLaluan\n $negeri\n $emel\n $nomtel\n $nomakaun");
                header("Location:ngo.php");    
               
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