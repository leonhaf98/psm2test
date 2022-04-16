<?php
session_start();
unset($_SESSION["kataNama"]);
unset($_SESSION["KataLaluan"]);
header("Location:mainpage.php");
?>