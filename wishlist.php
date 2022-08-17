<?php session_start(); ?>

<html>
<head>
<title>Wishlist</title>
	<link rel="stylesheet" href="wishlist.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<style>
.leftmenu{
	margin-top:25px;
}
.btn1:hover,.btn2:hover,.btn3:hover,.btn4:hover{
	background-color:rgba(0,0,0,0.4);
	color:white;
}
.home{
	color:white;
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
				<a class="btn3" href="wishlist.php" >Wishlist (<?php echo $count; ?>)</a></li>
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
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center mt-2">
				<h1>MY WISHLIST</h1>
			</div>
			<div class="col-lg-15 mt-1">
				<table class="table">
					<thead class="text-center">
						<tr>
							<th scope="col">S.No</th>
							<th scope="col">Product Name</th>
							<th scope="col">Amazon Price</th>
							<th scope="col">Flipkart Price</th>
							<th scope="col">Big Basket Price</th>
							<th scope="col">Reliance Digital Price</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php
							if(isset($_SESSION['wish']))
							{
								foreach($_SESSION['wish'] as $key => $value)
								{
									$sr=$key+1;
									echo"
									<tr>
										<td>$sr</td>
										<td>$value[Item_Name]</td>
										<td>
											$value[APrice]										
										</td>
										<td>$value[FPrice]</td>
										<td>$value[BBPrice]</td>
										<td>$value[RDPrice]</td>
										<td>
											<form action='manage_cart3.php' method='POST'>
												<button name='Add_To_Cart' class='btn btn-sm btn-outline-success'>Cart</button>
												<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
												<input type='hidden' name='APrice' value='$value[APrice]'>
												<input type='hidden' name='FPrice' value='$value[FPrice]'>
												<input type='hidden' name='BBPrice' value='$value[BBPrice]'>
												<input type='hidden' name='RDPrice' value='$value[RDPrice]'>
												<input type='hidden' name='Alink' value='$value[Alink]'>
												<input type='hidden' name='Flink' value='$value[Flink]'>
												<input type='hidden' name='Blink' value='$value[Blink]'>
												<input type='hidden' name='Rlink' value='$value[Rlink]'>
											</form>
										</td>
										<td>
											<form action='manage_wishlist.php' method='POST'>
												<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
												<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
											</form>
										</td>
									</tr>
									";
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>