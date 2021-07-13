<div id="updiv">

	 <a href="homepage.php"><input type="button" value="Logout" name="Logout" class="but"  style="height:35px; width:90px;" ></a>	
	
</div>

<?php
$nameerr= $emailerr = $commenterr = "";
$name = $emailid= $comment= "";
$flag=true;

if(isset($_POST['submit']))
{
		$name = $_POST["Name"];
		$emailid = $_POST["Email"];
		$comment = $_POST["Comment"];

	if(empty($name))
	{
		$nameerr = "Name is required";
		$flag=false;
	}
	else if(!preg_match("/^[A-Za-z]+$/",$name))
	{
		$nameerr= "Name must contain characters";
		$flag=false;
	}
	
	 if(empty($emailid))
	 {
		$emailerr = "Email is required";
		$flag=false;
	 } 

	if(empty($comment))
	 {
		$commenterr = "Comment is required";
		$flag=false;
	 }
}
	 
?>



<html>

<head>
	<title>DKTE</title>
	
	
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  float:right;
  margin-right:30px
}

.card:hover {
  box-shadow: 0 6px 14px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 4px 16px;
}


.column {
  float: right;
  width: 50%;
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

<link rel="stylesheet"  type"text/css"   href="ext.css"></link>
<title>Products</title>

</head>



<body>
	<div id="div2">
	<h1>Welcome to Online Shopping Mart</h1>
</div>
<div id="div3">
<pre>
<a href="homepage.php" class="ref">Home</a>			<a href="product.php"class="ref">Electronics</a>			<a href="comming.html"class="ref">Furniture</a>			<a href="comming.html"class="ref">Clothing</a></pre>
</div>


	<div>
		
		<div class="row">
			<div class="column" >

			<h1  style="text-align:left;margin-right:20px;"><font color="blue">SAMSUNG GALAXY m30</font><h1>
			<h3  style="text-align:left;margin-right:20px;">Manufacturer	:	Samsung</h3>
			<h3  style="text-align:left;margin-right:20px;">Model	:	Galaxy m30</h3>
			<h3  style="text-align:left;margin-right:20px;">Price 		: 12999</h3>
			<h3  style="text-align:left;margin-right:20px;">Operating System	:	Android</h3>
			<h3  style="text-align:left;margin-right:20px;">Os Version	:	9.0</h3>
			<h3  style="text-align:left;margin-right:20px;">Type	:	Smartphone</h3>
			<h3  style="text-align:left;margin-right:20px;">Status	:	Available</h3>
			
			
		
			<b>Color</b> <select id="color" name="mobile">
			<option value="red">Red</option>
			<option value="black">Black</option>
			<option value="white">White</option>
		   </select>   		&nbsp
		 
		   
		   <label for="quantity"><b>Quantity:</b></label>
		   <input type="number" id="quantity" name="quantity" min="1" max="5"><br><br>
		   
		   <button type="button" style="background-color:greenyellow; height:50px; width:280px;">ADD TO CART</button>


		   <form action="samdatabase.php" method="post">

<div style="background-color:white; height:300px; width:220px; padding-top:10px; padding-left:20px; margin:40px; border: 2px solid black; border-radius: 4px;"> 		<form>
		
		<p style="text-align:center"><b>Reviews</b><br>
		 
		<br>
				<input type="text" name="Name" placeholder="Your Name" style="height:30px; width:200px;"><br><br>
		<?php echo $nameerr;?>
		
		<input type="text" name="Email" placeholder="Email" style="height:30px; width:200px;"><br><br>
		<?php echo $emailerr;?><br>
		
		<textarea placeholder="Your Comment" name="Comment" style="height:40px; width:200px;"></textarea><br><br>
		<?php echo $commenterr;?><br>
		
		<input type="submit" name="submit" style="height:40px; width:70px;">
		</form>
		 </div>
	
		<?php


// Create connection
	$conn = mysqli_connect("localhost","root","", "logininfo2");

// Check connection
	if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		//echo "Connected successfully.";

	//$nm=$_POST['Name'];
	//$mail=$_POST['Email'];
	//$comm=$_POST['Comment'];
	
	$query1="Select name,comment from comment";
	$result1=mysqli_query($conn,$query1);
	
	$count=0; $pcount=0; $w1="good"; $w2="beautiful";$w3="liked";$w4="like" ;$w5="awesome";$w6="great";$w6="better";$w6="best";$w7="pretty"; $res=0;
	$w8="beautiful";$w9="powerful";$w10="cheap";$w11="dazzling";$w12="eye-grabber";$w13="lasting";$w17="excellent";$w18="nice";
	$w14="bad";$w15="not";$w16="costly";$w19="hate";$w20="not good";
	
	
	if(mysqli_num_rows($result1) > 0)
	{
		 echo "<table>";
            echo "<tr>";
       
                echo "<th>Name</th>";	
				
				echo "<th>Comment</th>";

    
            echo "</tr>";
		
			while($row = mysqli_fetch_array($result1)){
				if((strpos($row['comment'],$w14)!==false) || (strpos($row['comment'],$w15)!==false) ||(strpos($row['comment'],$w19)!==false)||(strpos($row['comment'],$w20)!==false)||
				(strpos($row['comment'],$w16)!==false))
				{$count=$count+1;}
			else {if((strpos($row['comment'],$w1)!==false) || (strpos($row['comment'],$w2)!==false) || 
			(strpos($row['comment'],$w3)!==false) || (strpos($row['comment'],$w4)!==false) ||
			(strpos($row['comment'],$w5)!==false) || (strpos($row['comment'],$w6)!==false) ||
			(strpos($row['comment'],$w7)!==false) || (strpos($row['comment'],$w8)!==false) ||
			(strpos($row['comment'],$w9)!==false) || (strpos($row['comment'],$w10)!==false) ||
			(strpos($row['comment'],$w11)!==false) || (strpos($row['comment'],$w12)!==false) ||
			(strpos($row['comment'],$w13)!==false) || (strpos($row['comment'],$w17)!==false) 
			|| (strpos($row['comment'],$w18)!==false)   )
			{
				$count=$count+1;
				$pcount=$pcount+1;
			}
			}
            echo "<tr>";
                 echo "<td>" . $row['name'] . "</td>";
				 echo "<td>" . $row['comment'] . "</td>";
              
            echo "</tr>";
		}
					
		$res=(5*$pcount)/$count;
        $res=round($res,1);
         echo "Ratings:".$res;
		 echo "</table>";

		mysqli_free_result($result1);
	}
	else
	{
		echo "No records matching";
	}

	
	
		mysqli_close($conn);
?>
		</div>		
		
			<img src="galaxym30.png" alt="not found" style="width:400px;height:400px;margin-right:130px; margin-top:50px; ">
			
		</div>
		
		</div>
		
		
	
</body>
</html>