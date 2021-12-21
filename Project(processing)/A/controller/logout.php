<?php
session_start();
unset($_SESSION['flag']);
$varu = $_REQUEST['user'];
$host = "localhost";
$dbuser = "root";
$dbpassword = '';
$dbname = 'online_shopping_management';
$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
$sql = "DROP TABLE ".$varu;
mysqli_query($con, $sql);
header('location:../views/login.html');




?>