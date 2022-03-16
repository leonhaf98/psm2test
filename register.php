<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<body>
    <center>
        <h1>Storing Form data in Database</h1>
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
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
     
<p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address">
            </p>
<p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>