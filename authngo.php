<?php
session_start();
if(!isset($_SESSION["kataNama"])){
header("Location: ngo.php");
exit(); }
?>