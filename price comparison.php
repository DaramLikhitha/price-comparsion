<?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Quick compare</title>

<script src="Storage.js"></script>
<link rel="stylesheet" href="StorageStyle.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>
<style>
.rightmenu{
	width:53%;
	height:80px;
	float:right;
}
</style>
<div class="bgimage">
	<div class="menu">
		<div class="leftmenu" ><h3>Price Mart</h3></div>
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
	<div class="text">
		<h4>Search * Compare * Buy</h4>
		<h1>Price Mart - For Quick Price Comparsion</h1>
	</div>
    <div class="search_wrap search_wrap_3">
      <div class="search_box">
        <input type="text" class="input" placeholder="search..." name="searchpro">
        <div class="btn btn_common">
          <a type="submit" href="search.php" name="submit"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
</div>
</body>
</html>