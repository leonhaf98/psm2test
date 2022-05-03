<?php
session_start();
include "database.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $con = mysqli_connect('localhost','root','','user') or die('Unable To connect');
    $sql = mysqli_query($con,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['first_name'] = $qry['first_name'];
        $_SESSION['user_type'] = $qry['user_type'];

        if($qry['user_type']=="admin"){
            header("location:adminpage.php");
        }else if($qry['user_type']=="username"){
            header("location:donator.php");
        }
    }
    else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='mainpage.php';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['user_type']);
    header("location:mainpage.php");
}
?>