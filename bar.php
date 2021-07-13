<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<title> welcome </title>
	<link rel="stylesheet" href="style.css">
</head>
<style>
*{
	margin: 0;
	padding: 0;
	<!--box-sizing: border-box;-->
	list-style : none;
	
}
body{
	background:black;
	}
.wrapper{
	display: flex;
	position: relative;
}
.wrapper .sidebar{
	position: fixed;
	width: 245px;
	height: 100%;
	background: black;
	padding: 30px 0;
	background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(bar.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	position: relative; left:20px; top:40px;
	
	
}
.wrapper .sidebar ul li{
	padding: 15px;
	<!--border-bottom: 1px solid reba(0,0,0,0.5);
	border-top: 1px solid rgba(225,225,225,0.05);-->
}
.wrapper .sidebar li
{
	text-align: center;
}
.wrapper .sidebar ul li a{

	display:button;
	
}
.wrapper .sidebar ul li:hover
{
	
	background:black;
	
}
.wrapper .sidebar ul li a{
<!--color: #fff;-->
}
</style>
<body>

<div class="wrapper">
	<div class="sidebar">
		<ul>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:purple;color:white; font-size:100%; width:200px">DASHBOARD</li>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">ADD USER</li>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">PRODUCT LIST</li>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">ORDERS</li>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">ADD PRODUCT</li>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">MANAGE USERS</li>
			<li><a href="#"><button style="border-radius:20px; padding-top:10px; padding-bottom:8px;background-color:black;color:white; font-size:100%; width:200px">LOG OUT</li>
		</ul>
</body>	
	