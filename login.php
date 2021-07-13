
<?php	
	session_start();
 $usererr= $usererr1= $passerr= $passerr1= "";
 $user= $pass= "";
 $flag=true;
if(isset($_POST['submit']))
{
	$user=$_POST['Username'];
	$pass=$_POST['Password'];
	
	if(empty($user))
	{
		$usererr="username compulsory";
		$flag=false;
	}
	elseif(!preg_match("/^[A-Za-z]+$/",$user))
		{
			$usererr1= "Name must contain characters and numbers";
			$flag=false;
		}
	if(empty($pass))
	{
		$passerr="password compulsory";
		$flag=false;
	}
}
?>

<!DOCTYPE html>
<html>

<head>
		<title>Login</title>
		
</head>

<body style="background-image:url('back.jpg'); background-size:cover; background-repeat:no-repeat; background-attachment:fixed;">
		
		
		<h1 style= "font-size:50px" align="center" >Login Page</h1>
		<pre>
		<div style="background:transparent; font-size:15px; font-family:verdana; height:280px; width:390px; padding-top:5px; padding-left:5px; margin-left:500px; border: 2px solid black; border-radius: 22px; box-shadow: 3px 3px white;">
		<form action="product.php" method="post">
	<b>Username </b>: <input type="text" name="Username" placeholder="Username" style="height:25px; width:220px" required><br>
	
	<b>Password </b> : <input type="password" name="Password" placeholder="Password" style="height:25px; width:220px" required><br>
			
		     <button class="but" style="height:35px; width:90px;" type="submit"><b>Login</b></button>   <a href="signup.php"><input type="button" value="signup" name="Signup" class="but"  style="height:35px; width:90px;" ></a>
		       
			 
		</form>
		</div>
		</pre>
</body>
</html>
