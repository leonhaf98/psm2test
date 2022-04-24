<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v3 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fontss/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="csss/stylee.css">
	</head>
	<?php require_once("database.php"); ?>
        
	<body>

		<div class="wrapper" style="background-image: url('images/bg.jpg');">
      

			<div class="inner">
            <?php 
                if(isset($_POST['signup'])){
                  extract($_POST);
                  if(strlen($Nama)<3){ // Minimum 
                      $error[] = 'Please enter First Name using 3 charaters atleast.';
                        }
                if(strlen($Nama)>100){  // Max 
                      $error[] = 'nama: Maksimum adalah tidak lebih 100 character';
                        }
                if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $Nama)){
                            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
                        }    
              
          
                      if(strlen($kataNama)<3){ // Change Minimum Lenghth   
                            $error[] = 'Please enter Username using 3 charaters atleast.';
                        }
                  if(strlen($kataNama)>20){ // Change Max Length 
                            $error[] = 'Username : Max length 50 Characters Not allowed';
                        }
               
                if(strlen($emel)>50){  // Max 
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
                          $sql="SELECT * from ngo where (password='$password' or emel='$emel');";
                      $res=mysqli_query($conn,$sql);
                         if (mysqli_num_rows($res) > 0) {
                        $row = mysqli_fetch_assoc($res);

                        if($kataNama==$row['kataNama'])
                        {
                          $error[] ='KATANAMA SUDAH DIPAKAI.';
                          } 
                         if($emel==$row['emel'])
                         {
                            $error[] ='EMEL SUDAH DIGUNAKAN.';
                          } 
                         }
                        if(!isset($error)){ 
                            $result = mysqli_query($conn,"INSERT into ngo(Nama,kataNama,password,negeri,emel,nomtel,nomakaun) 
                            values('$Nama','$kataNama','$password','$negeri','$emel','$nomtel','$nomakaun')");
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
                <?php 
                  if(isset($error)){ 
                foreach($error as $error){ 
                  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
                }
                }
                ?>
				<form action="" method="POST">
					<h3>BORANG PENDAFTARAN NGO</h3>
					<div class="form-group signup_form">
					
						<div class="form-wrapper">
							<label for="">Nama persatuan *</label>
							<div class="form-holder" >
								<i class="zmdi zmdi-account-o"></i>
                                
								<input type="text" class="form-control" name="Nama"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['Nama'];}?>" required="">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">emel ngo *</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="email" class="form-control" name="emel"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['emel'];}?>" required="">
							</div>
						</div>
						</div>

						<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">negeri *</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" name="negeri"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['negeri'];}?>" required="">
							</div>
						</div>
						<div class="form-wrapper">
							<label for=""value="<?php if(isset($error)){ echo $_POST['nomtel'];}?>">nombor telefon</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" name="nomtel"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['nomtel'];}?>" required="">
							</div>
						</div>
						</div>
						<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">nombor akaun *</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="telnum" class="form-control" name="nomakaun"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['nomakaun'];}?>" required="">
							</div>
						</div>
						</div>
						<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">kata nama *</label>
							<div class="form-holder"value="<?php if(isset($error)){ echo $_POST['kataNama'];}?>">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" name="kataNama"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['kataNama'];}?>" required="">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">kata laluan *</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" name="password"style="background-color:lightyellow;" class="form-control"placeholder="********" required="">
								
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">pengesahan kata laluan</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" name="passwordConfirm" style="background-color:lightyellow;"class="form-control" placeholder="********"required="">
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