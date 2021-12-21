<?php
	require_once('./model/usersModel.php');
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != ""){
			if($password != ""){

				$status = validate($username, $password);

				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ./view/Admin_Home.html');
				}else{
					header('location: login.php');
				}

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>
