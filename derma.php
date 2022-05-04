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
	<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }

if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter atleast 3 digit.';
        }
		

	if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
	if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
         if(!isset($error)){ 
            $result = mysqli_query($conn,"INSERT into sumbangan(nama,nomakaun,nomtel,nilai) 
            values('$fname','$lname','$telnum','$nilai')");
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

	<?php
  
  // Connect to database 
  $con = mysqli_connect("localhost","root","","user");
	
  // mysqli_connect("servername","username","password","database_name")
 
  // Get all the categories from category table
  $sql = "SELECT * FROM `ngo`";
  $all_categories = mysqli_query($con,$sql);
 
  // The following code checks if the submit button is clicked 
  // and inserts the data in the database accordingly
  if(isset($_POST['submit']))
  {
	  // Store the Product name in a "name" variable
	  $name = mysqli_real_escape_string($con,$_POST['Nama']);
	   
	  // Store the Category ID in a "id" variable
	  $id = mysqli_real_escape_string($con,$_POST['ngo_id']); 
	   
	  // Creating an insert query using SQL syntax and
	  // storing it in a variable.
	  $sql_insert = 
	  "INSERT INTO `ngo`(`Nama`, `ngo_id`)
		  VALUES ('$name','$id')";
		 
		// The following code attempts to execute the SQL query
		// if the query executes with no errors 
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($con,$sql_insert))
	  {
		  echo '<script>alert("Product added successfully")</script>';
	  }
  }
?>
		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
				<form action="" method="POST">
					<h3>BORANG SUMBANGAN</h3>
					<div class="form-group signup_form">
					
						<div class="form-wrapper">
							<label for="">Nama </label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="fname" style="background-color:lightyellow;"value="<?php if(isset($error)){ echo $_POST['fname'];}?>" >
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Nombor akaun</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control" name="lname"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" >
							</div>
						</div>
					</div>

					<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">nombor telefon</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" name="telnum"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['telnum'];}?>" >
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">nilai sumbangan</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" name="nilai"style="background-color:lightyellow;" value="<?php if(isset($error)){ echo $_POST['nilai'];}?>" >
							</div>
						</div>
					</div>
					<div class="form-group signup_form">
						<div class="form-wrapper">
							<label for="">NGO dipilih :</label>
							<div class="form-holder" style="font-size: large;">
							<select name="Category" style="font-size: large;">
								<?php 
									// use a while loop to fetch data 
									// from the $all_categories variable 
									// and individually display as an option
									while ($category = mysqli_fetch_array(
											$all_categories,MYSQLI_ASSOC)):; 
								?>
									<option value="<?php echo $category["ngo_id"];?>">
									
										<?php echo $category["Nama"];
											// To show the category name to the user
										?>
									</option>
								<?php 
									endwhile; 
									// While loop must be terminated
								?>
							</select>
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
					  	<button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">Sumbang</button>
            
						</div>
            <div class="button-holder">
           
						</div>
            <a class="btn btn-success" href="donator.php"><i class="mdi mdi-home me-2"></i>Kembali ke halaman utama Halaman Utama</a>
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>