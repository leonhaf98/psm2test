<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>PENDAFTARN AKAUN</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="mainpage.php" class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<body>
    <center>
        <h1>SILA ISI BORANG PENDAFTARAN DIBAWAH</h1>
        <form action="insert.php" method="post">    
<p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>           
<p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>           
<p>
                <label for="icnum">IC number:</label>
                <input type="text" name="icnum" id="IC">
            </p>
     
<p>
                <label for="telnum">telefon number:</label>
                <input type="text" name="telnum" id="telnum">
            </p>
<p>
                <label for="alamat">alamat:</label>
                <input type="text" name="alamat" id="alamat">
            </p>
<p>
                <label for="email">email:</label>
                <input type="text" name="email" id="email">
            </p>
            <a href="index.php">  
            <input type="submit" value="Hantar">
            </a>
            
        </form>
    </center>
</body>
  
</html>