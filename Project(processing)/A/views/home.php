<?php
session_start();
$varu = $_REQUEST['user'];
if(isset($_SESSION['flag'])){

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body>
   <div class="main2">
    <!--  <img class="bg" src="../images/hpmain.jpg" alt="something"> -->

        
            
                
                    <input type="text" placeholder="Search Product" id="myInput" name=""  onkeyup="SearchBar()">
                    <!-- <button>Search</button> -->

  <ul id="myUL">
  <li><a style="color:white;"  id="myUL" href="product1.html">Sky Blue</a></li>
  <li><a style="color:white;"  id="myUL"   href="product2.html">Rainbow</a></li>

  <li><a style="color:white;"  id="myUL"  href="product3.html">American</a></li>
  <li><a style="color:white;" id="myUL"  href="product4.html">Pink Ladies</a></li>

  <li><a style="color:white;" id="myUL" href="product5.html">Blue Ladies</a></li>
  <li><a style="color:white;" id="myUL"  href="product6.html">Chessboard</a></li>
  <li><a style="color:white;" id="myUL" href="product7.html">Coffe-deep blue</a></li>
</ul

 <a href="cart.html"></a>
 
 <!-- <a href="compare.html"><button>Compare Demo</button></a>
     <a href="member_card.html"><button>View Member Card</button></a>
    <a href="../controller/logout.php?user=<?php echo $varu?>"><button>Logout</button>
 </a> -->

</head>
<body>

<ul>
  <li><a href="cart.php?user=<?php echo $varu?>">View Cart</a></li>

  <li> <a href="contact.html">Contact Others</a></li>
  <li> <a href="../views/member_card.html">View Member Card</a></li>
   <li><a href="../controller/logout.php?user=<?php echo $varu?>">Logout
 </a></li>
</ul>

         

          
               
                <h1 >Special Shoes With Offers</h1>
             <form action = "../controller/cartbackend.php" method = "POST">
                <!-- loop -->

                <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'online_shopping_management');
                    $query = "SELECT * FROM shoe";
                    $values = mysqli_query($connection, $query);
                ?>

                <?php
                    while ($row = mysqli_fetch_assoc($values)) {
                        $name = $row['name'];
                        $brand = $row['brand'];
                        $code = $row['code'];
                        $availibility = $row['availibility'];
                        $price = $row['price'];
                        $discount = $row['discount'];
                        $image = $row['image'];
                        ?>
                        <form action = "../controller/cartbackend.php" method = "POST">

                        <img src ="../<?php echo $image?>" alt = "product image" style="width: 40%;">
                            <br>

                            <input class="aa" type="text" name="user" value="<?php echo $varu?>" class = "usertext">
                            <input class="bb" type="text" name="code" value="<?php echo $code?>" class = "codetext">
                            <p>Size:</p>
                                <div class="sizes">
                                        <input type="radio" id="6" name="sizes"value="6" checked><label for="6"> 6</label>
                                        <input type="radio" id="7" name="sizes"value="7"><label for="7"> 7</label>
                                        <input type="radio" id="8" name="sizes"value="8"><label for="8"> 8</label>
                                        <input type="radio" id="9" name="sizes"value="9"><label for="9"> 9</label>
                                        <input type="radio" id="10" name="sizes"value="10"><label for="10"> 10</label>
                                    </div>
                                    <h4>Quantity *</h4>
                                    <button>-</button><input type="text" name="quantity" value="1"><button>+</button><br>
                                 <input  type="submit" name="submit" value="Add to Cart">

                                 </form>
                                <a href="../controller/details.php?proid=<?php echo $code?>"> <button type = "button"> Details
                                    
                                </button>
                                </a>
                                <br>
                                
                            <!--     lulami start -->
                            <form method="POST" action="../controller/feedback.php">
                                <br><br><label for="feedback">Give your feedback</label>
                                <br><textarea name="feedback" id="lol" placeholder="Your comment"></textarea><br>
                             
                                    <a href="fdtable.php"> <button name="submit">Submit</button></a>
                                       

                                </form>

                                  <!--   lulami end -->
                                
                                <p>Actual Price: $<?php echo $price ?></p>
                                <?php
                                $mult = $price-(($price*$discount)/100); 
                                ?>
                                <p>After Discount: $<?php echo $mult ?></p>
                                <!-- <a href="feedaback.html"><button>Submit</button></a> -->
                        <?php
                        
                    }
                ?>

              
            </div>

        <script src=../controller/trying.js></script>
    </div>

    </body>
</html>

<?php

 }
 else{
    header('location:login.html');
 }


 ?>
    
