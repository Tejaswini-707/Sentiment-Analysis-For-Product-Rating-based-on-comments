
<!DOCTYPE html>
<html>
<head>
<style>
body {
	background-image: url('back.jpg');
	background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<link rel="stylesheet"  type"text/css"   href="ext.css"></link>
<title>Products</title>
</head>
<body >
<div id="updiv">
<?php
//session_start();
$_SESSION['Username']=$_POST['Username'];
echo "Welcome  ".$_SESSION['Username'];
echo"<br>";
echo"<br>";
?>
	 <a href="homepage.php"><input type="button" value="Logout" name="Logout" class="but"  style="height:35px; width:90px;" ></a>	
	
</div>
<div id="div2">
	<h1>Welcome to Online Shopping Mart</h1>
</div>
<div id="div3">
<pre>
	<a href="homepage.php" class="ref">Home</a>			<a href="product.php"class="ref">Electronics</a>			<a href="comming.html"class="ref">Furniture</a>			<a href="comming.html"class="ref">Clothing</a>
</pre>
</div>
<div id="div4">
<pre>
<h1>Brands</h1>
<a href="samsung.php" class="ref">Samsung</a><br><br>
<a href="apple.php" class="ref">apple</a><br><br>
<a href="oppo.php" class="ref">oppo</a><br><br>
<a href="oneplus.php" class="ref">oneplus</a><br><br>
<a href="redmi.php" class="ref">Redmi</a>
</div>
<a href="apple.php">
<div class="card">
  <img src="11pro.png"  style="width:100%">
  <h1>Apple iPhone 11 Pro</h1>
  <p class="price">31,07,100</p>
  <p>5.8-inch Super Retina XDR OLED display.Water and dust resistant (4 meters for up to 30 minutes, IP68).</p>
  	<p><button type="button">View Product</button>
</div>
</a>
<a href="samsung.php">
<div class="card">
  <img src="galaxym30.png"  style="width:100%">
  <h1> Galaxy M30s </h1>
  <p class="price">12,999</p>
  <p>Memory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 512GB | Dual nano SIM with dual standby (4G+4G).</p>
	<p><button type="button" onclick="display.html">View Product</button>
</div>
</a>


<a href="oppo.php">
<div class="card">
  <img src="oppo.png"  style="width:100%">
  <h1>OPPO F15</h1>
  <p class="price">18,328</p>
  <p>48MP+8MP+2MP+2MP rear camera with photo, video, professional mode, panorama, portrait, night scene, time-lapse photography.</p>
  <p><button>View Product</button></p>
</div>
</a>

<a href="oneplus.php">
<div class="card">
  <img src="plus7t.png"  style="width:100%">
  <h1>OnePlus 7T</h1>
  <p class="price">37,999</p>
  <p>48+12+16MP triple rear camera with telephoto lens + ultrawide angle lens | 16MP front camera with 4K video capture </p>
  <p><button>View Product</button></p>
</div>
</a>

<a href="redmi.php">
<div class="card">
  <img src="redmi8.png"  style="width:100%">
  <h1>Redmi Note 8 Pro</h1>
  <p class="price">15,999</p>
  <p>64MP AI Quad rear camera with Portrait ultra-wide lens, macro lens, led flash, AI support, beautify support.</p>
  <p><button>View Product</button></p>
</div>
</a>

</body>
</html>



	