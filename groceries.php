<?php

$user = 'root';
$password = '';

$database = 'price comparison';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM groceries";
$result = $mysqli->query($sql);
$mysqli->close();

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Groceries</title>
	<link rel="stylesheet" href="groceries.css">
</head>

<body>
<style>
th {
	background-color : #f58a5f;
}
.rightmenu{
	width:53%;
}
</style>
	<div class="menu">
		<div class="leftmenu">
			<ul><h3><a class="home" href="price comparison.php" >Price Mart</a></h3></ul>
		</div>
		<div class="rightmenu">
			<ul>
			<li><a class="btn1" href="categories.php" >Categories</a></li>
			<li><a class="btn2" href="All products.php" >All Products</a></li>
			<li>
				<?php
					$count=0;
					if(isset($_SESSION['wish']))
					{
						$count=count($_SESSION['wish']);
					}
				?>
				<a class="btn3" href="wishlist.php" >Wishlist (<?php echo $count; ?>)</a>
			</li>
			<li>
				<?php
					$count=0;
					if(isset($_SESSION['cart']))
					{
						$count=count($_SESSION['cart']);
					}
				?>
				<a class="btn4" href="cart.php" >Cart (<?php echo $count; ?>)</a>
			</li>
			<li><a class="btn5" href="login.php" >Login/Register</a></li>
			</ul>
		</div>
	</div>
	
	<section>
		<h1>Groceries</h1>
		<table>
			<tr>
				<th>Product</th>
				<th>Product Name</th>
				<th>Amazon Price</th>
				<th>Flipkart Price</th>
				<th>Big Basket Price</th>
				<th></th>
			</tr>

			<?php 
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
					<td><img src="<?php echo $rows['image']; ?>" width="150" height="200"></td>
					<td><?php echo $rows['product_name'];?></td>
					<td><?php echo $rows['amazon price'];?></td>
					<td><?php echo $rows['flipkart price'];?></td>
					<td><?php echo $rows['big basket price'];?></td>
					<td>
						<form action="manage_wishlist.php" method="POST">
						<button type="submit" class="button" name="Add_To_Wishlist" >Add to Wishlist</button>
						<input type="hidden" name="Item_Name" value="<?php echo $rows['product_name'];?>">
						<input type="hidden" name="APrice" value="<?php echo $rows['amazon price'];?>">
						<input type="hidden" name="FPrice" value="<?php echo $rows['flipkart price'];?>">
						<input type="hidden" name="BBPrice" value="<?php echo $rows['big basket price'];?>">
						<input type="hidden" name="RDPrice" value=" ">
						<input type="hidden" name="Alink" value="<?php echo $rows['amazon_link'];?>">
						<input type="hidden" name="Flink" value="<?php echo $rows['flipkart_link'];?>">
						<input type="hidden" name="Blink" value="<?php echo $rows['bb_link'];?>">
						<input type="hidden" name="Rlink" value=" ">
					</form>
						<form action="manage_cart.php" method="POST">
							<button type="submit" class="button" name="Add_To_Cart" >Add to Cart</button>
							<input type="hidden" name="Item_Name" value="<?php echo $rows['product_name'];?>">
							<input type="hidden" name="APrice" value="<?php echo $rows['amazon price'];?>">
							<input type="hidden" name="FPrice" value="<?php echo $rows['flipkart price'];?>">							
							<input type="hidden" name="BBPrice" value="<?php echo $rows['big basket price'];?>">
							<input type="hidden" name="RDPrice" value=" ">
							<input type="hidden" name="Alink" value="<?php echo $rows['amazon_link'];?>">
							<input type="hidden" name="Flink" value="<?php echo $rows['flipkart_link'];?>">
							<input type="hidden" name="Blink" value="<?php echo $rows['bb_link'];?>">
							<input type="hidden" name="Rlink" value=" ">
						</form>
					</td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

