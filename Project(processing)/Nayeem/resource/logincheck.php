<?php
	require_once('../model/usersModel.php');
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != ""){
			if($password != ""){

				$status = validate($username, $password);

				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../scripts/home.html');
				}else{
					header('location: signin.php');
				}

			}
	}
}

 $error = ($username && $password && $email);

	if ($error == "")
  {
    echo "Please fill all the fileds";
  }

?>
