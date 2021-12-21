
<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Membership Card</title>
	<link rel="stylesheet" type="text/css" href="../CSS/member_card - Copy.css">
</head>
<div class="main3">
<center>
<fieldset style="width: 100%;">
	<legend>Member Card</legend>

	<table>	
		<tr>
			<td><h3>Name: Sadman Kabir Sami</h3>
	<h3>Age:22</h3>
	<h3>Address: Dhaka</h3></td>
	<td>
	</td>
	<td></td><td></td><td></td><td></td><td></td>
	<td><img src="../images/<?=$_SESSION['myimage']?>"  width='100px' height='100px'>
		</tr>
		
	
	</table>
	</div>


	
</fieldset>
</center>

<body>

</body>
</html>