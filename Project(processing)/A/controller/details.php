<?php
	session_start();
	$var = $_REQUEST['proid'];
	$host = "localhost";
	$dbuser = "root";
	$dbpassword = '';
	$dbname = 'online_shopping_management';
	$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
	$sql = "SELECT * FROM shoe WHERE code='{$var}'";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$name = $row['name'];
        $brand = $row['brand'];
        $code = $row['code'];
        $availibility = $row['availibility'];
        $price = $row['price'];
        $discount = $row['discount'];
        $image = $row['image'];

        ?>
        <link rel="stylesheet" type="text/css" href="../CSS/details.css">
        <h2><?php echo $name?></h2>
        <img src ="../<?php echo $image?>" alt = "product image" style="width: 40%;">
        <h3>Brand: <?php echo $brand?></h3>
        <h3>Product Code:  <?php echo $code?></h3>
        <h3>Availability: <?php echo $availibility?></h3>
        <h1>Price: <?php echo $price?>  &nbsp  <span style="font-size: 20px;">-<?php echo $discount?></span></h1>
        <?php
        $mult = $price-(($price*$discount)/100); 
        ?>
        <h1>Actual Price: <?php echo $mult?></h1>
		<p>This shoe is beautiful and comfortable.  </p>
		<h4>Size *</h4>
		<div class="sizes">
			<input type="radio" id="6" name="abc"value="6" checked><label for="6"> 6</label>
			<input type="radio" id="7" name="abc"value="7"><label for="7"> 7</label>
			<input type="radio" id="8" name="abc"value="8"><label for="8"> 8</label>
			<input type="radio" id="9" name="abc"value="9"><label for="9"> 9</label>
			<input type="radio" id="10" name="abc"value="10"><label for="10"> 10</label>
		</div>
		<h4>Quantity *</h4>
		<button>-</button><input type="text" name="" value="1"><button>+</button>
		<button>Add to cart</button>

        <?php
	}
?>