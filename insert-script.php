<?php 
if(isset($_POST['submit'])){

  $fullName = $_POST['nama'];
  $courseName = $_POST['nama_ngo'];

     if(!empty($fullName) && !empty($courseName)){
      $query = "INSERT INTO sumbangan (nama, nama_ngo) VALUES('$fullName', '$courseName')";
      $result = $conn->query($query);
     
      if($result){
        echo "Student detail is inserted successfully";
      }  
    }
  }

?>