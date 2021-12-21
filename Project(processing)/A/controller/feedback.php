<?php
session_start();

		
		if(isset($_REQUEST['submit'])){
		$host = "localhost";
		$dbuser = "root";
		$dbpassword = '';
		$dbname = 'online_shopping_management';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

		if(!$con)
		{
			die("connection faild due to" .mysqli_connect_error());
		}
		/*echo "sucess";*/
		$feedback= $_REQUEST['feedback'];
		/*$sql= "INSERT INTO feedback (feedback) VALUES ('$feedback')"; */
		$sql = "INSERT INTO feedback (feedback) VALUES ('$feedback')"; 
		/*echo $sql;*/

	/*	$output = mysqli_query($con, $sql);

		if (mysqli_query($con,$sql)) {
  								echo "feedback stored successfully";
  								header('location: ../views/home.php');
							} else {
  								echo "Error";
  								echo "Error: " . $sql . "<br>" . $con->error;
							}*/


							if ($con->query($sql) == true)
							{
								/*echo "Thank you so much for your feedback on our products";*/

								header('location:../views/fdtable.php');

							}
							else
							{
								echo "Error: $sql <br> $con -> error";
							}
							$con ->close();
	}

			
		









?>

