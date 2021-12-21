<?php 
session_start();
if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$host = "localhost";
		$dbuser = "root";
		$dbpassword = '';
		$dbname = 'online_shopping_management';

		/*global $host;
		global $dbuser;
		global $dbpassword;
		global $dbname;*/
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		if($username != ""){
			if($password != ""){
				if($email != ""){
					if(strlen($username)<3){
						echo "Error";
					}
					else if(!strpos($password, "#")){
						echo "Need a special character like #";
					}
					else{
						/*$_SESSION['username']=$username;
						$_SESSION['password']=$password;*/
						// $myfile = fopen('test.txt', 'a');
						// $user = $username."|".$password."|".$email."\r\n";
						// fwrite($myfile, $user);
						// fclose($myfile);
						

						
						$sql = "SELECT * FROM users WHERE username='{$username}'";
						$sql2 = "SELECT * FROM users WHERE email='{$email}'";
						$result = mysqli_query($con, $sql);
						$result2 = mysqli_query($con, $sql2);
						$user = mysqli_fetch_assoc($result);
						$user2 = mysqli_fetch_assoc($result2);


						if($user != null ){
							echo "username already taken";
						}
						else if($user2 != null){
							echo "email already used";
						}else{
							
							$insert = "INSERT INTO users (username, password, email)
							VALUES ('$username','$password','$email')";

							if (mysqli_query($con,$insert)) {
  								echo "New record created successfully";
  								header('location: ../views/login.html');
							} else {
  								echo "Error: " . $insert . "<br>" . $con->error;
							}
							
						}
					
						
					}
					
				}else{
					echo "Give an Email";
				}
			}else{
				echo "Give a Password";
			}
		}else{
			echo "Give a Username";
		}
	}








?>