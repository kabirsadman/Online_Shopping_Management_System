<?php 

	
session_start();

	$des = '../images/'.$_FILES['myfile']['name'];
	$src = $_FILES['myfile']['tmp_name'];

	if(move_uploaded_file($src, $des)){
		$_SESSION['myimage'] = $_FILES['myfile']['name'];
		header('location: member_card - Copy.php');
	}else{
		echo "error";
	}
?>