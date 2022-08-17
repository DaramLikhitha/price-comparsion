<html>
<head>
<title>Search</title>
<link rel="stylesheet" href="All products.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
h2{
	padding-top:15px;
	padding-bottom:15px;
}
.searchbox{
	padding-left:15px;
	padding-right:15px;
}
</style>
</head>
<body>
	<div class="menu">
		<div class="leftmenu">
			<ul><h3><a class="home" href="price comparison.php" style="color:white;">Price Mart</a></h3></ul>
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
	
<div class="class1">
<h2>Check whether product is available or not..</h2>
<div class="searchbox"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Products.." title="Type in a name"></div>

<table id="myTable">
  <tr class="header">
	<th>Product</th>
    <th>Name</th>
    <th>Amazon Price</th>
	<th>Flipkart Price</th>
	<th>Big Basket Price</th>
	<th>Reliance Digital Price</th>
  </tr>
  <tr>
    <td>boAt Rockerz 255 Sports Bluetooth Wireless Earphone With Immersive Stereo Sound and Hands Free Mic,</td>
	<td><img src="boat rocker.jpeg" alt=" " width="150" height="180"></td>
    <td>799</td>
	<td>899</td>
	<td>0</td>
	<td>799</td>
  </tr>
  <tr>
	<td>Brooke Bond Red Label Natural Care Tea, 250gm</td>
    <td><img src="red label.jpeg" alt=" " width="150" height="180"></td>
	<td>145</td>
	<td>239</td>
	<td>157</td>
	<td>0</td>
  </tr>
  <tr>
	<td>Canon EOS 200D II DSLR Camera EF-S18-55mm IS STM (Black)</td>
    <td><img src="canon.jpeg" alt=" " width="150" height="180"></td>
	<td>53990</td>
	<td>53990</td>
	<td>0</td>
	<td>56990</td>
  </tr>
  <tr>
	<td>Fortune Sunlite Refined Sunflower Oil Pouch (1 L)</td>
    <td><img src="oil.jpeg" alt=" " width="150" height="180"></td>
	<td>151</td>
	<td>132</td>
	<td>140</td>
	<td>0</td>
  </tr>
  <tr>
	<td>Grb Ghee/Tuppa, 500 ml Pouch</td>
    <td><img src="ghee.jpeg" alt=" " width="150" height="180"></td>
	<td>340</td>
	<td>359</td>
	<td>301</td>
	<td>0</td>
  </tr>
  <tr>
	<td>Lenovo IdeaPad Slim 5 AMD Ryzen 7 5700U 14" (35.56cm) FHD IPS Thin & Light Laptop (8GB/512GB SSD/Win</td>
    <td><img src="lenovo.jpeg" alt=" " width="150" height="180"></td>
	<td>59999</td>
	<td>53990</td>
	<td>0</td>
	<td>61799</td>
  </tr>
  <tr>
	<td>PONDS Cold Cream 200 ml</td>
    <td><img src="ponds.jpeg" alt=" " width="150" height="180"></td>
	<td>279</td>
	<td>306</td>
	<td>349</td>
	<td>0</td>
  </tr>
  <tr>
	<td>Samsung 80 cm (32 inch) HD Ready LED Smart TV, Series 4</td>
	<td><img src="sumsung.jpeg" alt=" " width="150" height="180"></td>
	<td>21600</td>
	<td>26900</td>
	<td>0</td>
	<td>25499</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</div>

</body>
</html>

