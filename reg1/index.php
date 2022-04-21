<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v3 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<?php require_once("database.php"); ?>
	<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter Last Name using 3 charaters atleast.';
        }
if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
      if(strlen($username)<3){ // Change Minimum Lenghth   
            $error[] = 'Please enter Username using 3 charaters atleast.';
        }
  if(strlen($username)>50){ // Change Max Length 
            $error[] = 'Username : Max length 50 Characters Not allowed';
        }
  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
            $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
        }  
if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from users where (username='$username' or email='$email');";
      $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($username==$row['username'])
     {
           $error[] ='Username alredy Exists.';
          } 
       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
            $result = mysqli_query($conn,"INSERT into users(first_name,last_name,username,email,telnum,alamat,password) 
            values('$fname','$lname','$username','$email','$telnum','$alamat','$password')");
           if($result)
           
    {
        header("Location:mainpage.php"); 
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>

		 <div class="col-sm-4">
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
				<form action="" method="POST">
					<h3>Registration Form</h3>
					<div class="form-group signup_form">
					
						<div class="form-wrapper">
							<label for="">Nama pertama:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="fname" style="background-color:lightyellow;"value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Nama terakhir</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control" name="lname"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required="">
							</div>
						</div>
					</div>

					<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">alamat</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="alamat" class="form-control" name="alamat" style="background-color:lightyellow;"value="<?php if(isset($error)){ echo $_POST['alamat'];}?>" required="">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">nombor telefon</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="telnum" class="form-control" name="telnum"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['telnum'];}?>" required="">
							</div>
						</div>
					</div>
					<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">email</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="email" class="form-control" name="email"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
							</div>
						</div>
					</div>
					<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">kata nama:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" name="username"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['username'];}?>" required="">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">kata laluan</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" name="password" class="form-control"style="background-color:lightyellow;" placeholder="********" required="">
								
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">pengesahan kata laluan</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" name="passwordConfirm" class="form-control"style="wbackground-color:lightyellow;" placeholder="********"required="">
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox"> sila tanda ini untuk pengesahan maklumat diatas
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
						<button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">Daftar!</button>
						
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>