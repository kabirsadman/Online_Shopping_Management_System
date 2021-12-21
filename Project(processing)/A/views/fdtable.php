<?php

include_once('../model/feed.php');
/*if(isset($_REQUEST['submit'])){*/


/*$sno = $_REQUEST['sno'];*/
/*$feedback = $_REQUEST['feedback'];*/


$query= "SELECT * FROM feedback";
$result= mysqli_query($con,$query);
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/feedtable.css">
</head>
<body>
	<!-- <table border="1" id="fun" align="center">
		<tr>
			<td>sno</td>
			<td>feedback</td>
		</tr> -->
		<table id="customers">
  <tr>
			<td>sno</td>
			<td>feedback</td>
		</tr>
   

		<?php
		while($rows=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
			<td><?php echo $rows['sno'];?></td>
			<td><?php echo $rows['feedback'];?></td>
			
		</tr>
		<?php


		}
	
		?>
		</table>
		

</body>
</html>




