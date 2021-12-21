<?php 
session_start();
if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$host = "localhost";
		$dbuser = "root";
		$dbpassword = '';
		$dbname = 'online_shopping_management';

	/*	global $host;
		global $dbuser;
		global $dbpassword;
		global $dbname;*/
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

		if($username != ""){
			if($password != ""){
				// $myfile = fopen('test.txt', 'r');

				// while(!feof($myfile)){
				// 	$data = fgets($myfile);
				// 	$myuser = explode('|', $data);
				// 	if(trim($myuser[0]) == $username && trim($myuser[1]) == $password){
				// 		$_SESSION['flag']="true";
				// 		header('location:index.php');
				// }
				$sql = "SELECT * FROM users WHERE username='{$username}' AND password ='{$password}' ";
				$result = mysqli_query($con, $sql);
				$user = mysqli_fetch_assoc($result);
				if($user != null ){
					$lol = $user['username'];
					$createDB = "CREATE TABLE $lol(
						name VARCHAR(255),
						brand VARCHAR(255),
						code VARCHAR(255),
						size int,
						quantity int,
						price VARCHAR(255),
						discount VARCHAR(255),
						after_disc VARCHAR(255)
					)";
					mysqli_query($con,$createDB);
					$_SESSION['flag']="true";
					header('location:../views/home.php?user='.$lol);
				}
				else{
					echo "username or password did not match";
				}
			}
			echo "Everything went wrong" ;
			}else{
				echo "Give a Password";
			}
		}else{
			echo "Give a Username";
		}
	








?>