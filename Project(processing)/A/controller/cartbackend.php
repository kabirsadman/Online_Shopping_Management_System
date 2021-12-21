<?php 
session_start();


$name = null;
$brand = null;
$code = null;
$availibility = null;
$price = null;
$discount = null;



$host = "localhost";
$dbuser = "root";
$dbpassword = '';
$dbname = 'online_shopping_management';
$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
if (isset($_REQUEST['submit'])) {
	$quantity = $_REQUEST['quantity'];
	$size = $_REQUEST['sizes'];
	$user = $_REQUEST['user'];
	$code = $_REQUEST['code'];

	$sql = "SELECT * FROM shoe WHERE code = '{$code}'";

	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$name = $row['name'];
        $brand = $row['brand'];
        $code = $row['code'];
        $availibility = $row['availibility'];
        $price = $row['price'];
        $discount = $row['discount'];
	}

    $mult = $price-(($price*$discount)/100); 
    $insert = "INSERT INTO $user (name, brand, code,size,quantity,price,discount,after_disc)
	VALUES ('$name','$brand','$code','$size','$quantity','$price','$discount','$mult')";
	mysqli_query($con,$insert);
	$_SESSION['flag']="true";
	header('location: ../views/home.php?user='.$user);


}








?>