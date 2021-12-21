<?php

	$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CART</title>
	<link rel="stylesheet" type="text/css" href="../CSS/cart.css">
</head>
<body>
	<table border="1" id="rofl">
		<tr >
			<th>Product Name</th>
			<th>Product Brand</th>
			<th>Product Code</th>
			<th>Size</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Final Price</th>
		</tr>
		<?php
			$user = $_REQUEST['user'];
			$host = "localhost";
			$dbuser = "root";
			$dbpassword = '';
			$dbname = 'online_shopping_management';
			$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
			$sql = "SELECT * FROM $user";
			$result = mysqli_query($con, $sql);
			while($row = mysqli_fetch_assoc($result)){
				$name = $row['name'];
        		$brand = $row['brand'];
        		$code = $row['code'];
        		$size = $row['size'];
        		$quantity = $row['quantity'];
        		$price = $row['price'];
        		$discount = $row['discount'];
        		$after_disc = $row['after_disc'];
        		$totalprice = $quantity*$after_disc;
        		$total = $total+$totalprice;
        		?>

        		<tr>
        			<td><?php echo $name ?></td>
        			<td><?php echo $brand ?></td>
        			<td><?php echo $code ?></td>
        			<td><?php echo $size ?></td>
        			<td><?php echo $quantity ?></td>
        			<td><?php echo $price ?></td>
        			<td><?php echo $discount ?></td>
        			<td><?php echo $totalprice ?></td>
        		</tr>
        		<?php
			}
		?>
		<tr>
			<td colspan="7">Total</td>
			<td><?php echo $total?></td>
		</tr>
	</table>
	<!--  <label for="Payment" class="pp">Select your Payment method:</label>

	<select name="Payment" id="Payment">
		<option selected disabled="">Select an option...</option>
  		<option value="Online Payment">Online Payment</option>
  		<option value="bKash">bKash</option>
  		<option value="Rocket">Rocket</option>
  		<option value="Nagad">Nagad</option>
	</select> 
	<a href=""><button>Check Out</button></a> -->

</body>
</html>