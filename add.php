

<html>

<head>
	<title>DKTE</title>
	<link rel="stylesheet" href="style.css">
	
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  float:left;
  margin-right:60px
}

.card:hover {
  box-shadow: 0 6px 14px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 4px 16px;
}


.column {
  float: left;
  width: 60%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:before {
  content: "";
  display: table;
  clear: both;
}

body {
	background-image: url('back.jpg');
	background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}


</style>


<title>Products</title>

</head>



<body>
	


	<div>
		
		<div class="row">
			<div class="column" >

						<img src="adminshop.jpg" alt="not found" style="width:1200px;height:500px;margin-right:150px; margin-top:20px; ">
			</div>
		<ul>
			<li><a href="add.php"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:purple;color:white; font-size:100%; width:200px ;margin-top:60px;">DASHBOARD</li>
			<li><a href="addu.html"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">ADD USER</li>
			<li><a href="productlist.php"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">PRODUCT LIST</li>
			<li><a href="logout.php"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">LOG OUT</li>
		</ul>
		 
				

		
		
			
		</div>	
	</div>	
		
		
	
</body>
</html>