<?php
include("database.php");
include("insert-script.php");
?>
<form action="" method="post">
<input type="text" name="fullName" value="">
<select name="Nama">
    <option value="">Select Course</option>
    <?php 
    $query ="SELECT Nama FROM ngo";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['Nama'];
    ?>
    <?php
    //selected option
    if(!empty($courseName) && $courseName== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<br>
<input type="submit" name="submit">
</form>