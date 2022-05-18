<?php 
if(isset($_POST['submit'])){
  $courseName = $_POST['nama'];
  if(!empty($courseName)){
      $query = "INSERT INTO sumbangan (nama) VALUES('$courseName')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }

?>