<?php
	session_start();
	require_once('model/usersModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){

					$user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
					$status = insertUser($user);
					if($status)
          {
						header('location: resource/success.html');
					}else{
						echo "try again...";
					}

		      }
	       }
        }
      }

  if (($username && $password && $email) == "")
  {
    echo "Please fill all the fileds";
  }

?>
