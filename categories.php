<?php
session_start();
?>
<html>
<head>
<title>Categories</title>
<link rel="stylesheet" href="categories.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<style>
.leftmenu{
	margin-top:25px;
}
.rightmenu{
	width:55%;
}
.cat ul{
	margin-left:50px;
}
.cat ul li{
	display:inline-block;
	list-style:none;
	margin-left:2%;
	margin-top:10px;
	text-align:center;
}
h2{
	padding-top:50px;
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
			<h3><a class="home" href="price comparison.php" >Price Mart</a></h3>
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
	<h2>CATEGORIES</h2>
	<div class="cat">
	<ul>
	<li><div class="card1" style="width: 18rem;">
		<img class="card-img-top" src="electronics.png" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">ELECTRONICS</h5>
		<a href="electronics.php" class="btn btn-primary">Go To Electronics</a>
	</div>
	</div></li>
	<li><div class="card2" style="width: 18rem;">
		<img class="card-img-top" src="groceries.jpg" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">GROCERIES</h5>
		<a href="groceries.php" class="btn btn-primary">Go To Groceries</a>
		</div>
	</div></li>
	<li><div class="card3" style="width: 18rem;">
		<img class="card-img-top" src="men.png" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">MEN</h5>
		<a href="#" class="btn btn-primary">Go To Men</a>
		</div>
	</div></li>
	<li><div class="card4" style="width: 18rem;">
		<img class="card-img-top" src="women.png" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">WOMEN</h5>
		<a href="#" class="btn btn-primary">Go To Women</a>
		</div>
	</div></li>
	<li><div class="card5" style="width: 18rem;">
		<img class="card-img-top" src="books.jpg" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">BOOKS</h5>
		<a href="#" class="btn btn-primary">Go To Books</a>
		</div>
	</div></li>
	<li><div class="card6" style="width: 18rem;">
		<img class="card-img-top" src="cosmetics.jpg" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">COSMETICS</h5>
		<a href="#" class="btn btn-primary">Go To Cosmetics</a>
		</div>
	</div></li>
	<li><div class="card7" style="width: 18rem;">
		<img class="card-img-top" src="homefurniture.jpg" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">HOME FURNITURE</h5>
		<a href="#" class="btn btn-primary">Go To Home Furniture</a>
		</div>
	</div></li>
	<li><div class="card8" style="width: 18rem;">
		<img class="card-img-top" src="ayurvedic.jpg" alt="Card image cap" width="180" height="200">
		<div class="card-body">
		<h5 class="card-title">AYURVEDIC PRODUCTS</h5>
		<a href="#" class="btn btn-primary">Go To Ayurvedic Products</a>
		</div>
	</div></li>
	</ul>
	</div>
</body>
</html>