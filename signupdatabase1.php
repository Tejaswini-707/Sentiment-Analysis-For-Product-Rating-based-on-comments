<?php


// Create connection
	$conn = mysqli_connect("localhost","root","", "logininfo");

// Check connection
	if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully.";

	$fnm=$_POST['firstn'];
	$lnm=$_POST['lastn'];
	$gen=$_POST['gend'];
	$mail=$_POST['emailid'];
	$cellno=$_POST['phonnum'];
	$addres=$_POST['addres'];
	$unm=$_POST['userna'];
	$pass=$_POST['passw'];
	$confpass=$_POST['confirmpass'];
	
	
	
		
		
		
	$sql = "INSERT INTO logindata(fname,lname,gender,emailid,phoneno,address,username,password,confirmpassword)
			values('$fnm','$lnm','$gen','$mail','$cellno','$addres','$unm','$pass','$confpass')";
	
	if (mysqli_query($conn, $sql)) 
	{
			echo "New record created successfully.";
	} 
	
	else 
	{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


		mysqli_close($conn);
?>












