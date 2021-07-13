<?php


// Create connection
	$conn = mysqli_connect("localhost","root","", "logininfo5");

// Check connection
	if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully.";

	$nm=$_POST['Name'];
	$mail=$_POST['Email'];
	$comm=$_POST['Comment'];

	$sql = "INSERT INTO comment(name,email,comment) values('$nm','$mail','$comm')";
	
	if (mysqli_query($conn, $sql)) 
	{
			echo "New record created successfully.";
	} 
	
	else 
	{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	$query1="Select * from comment";
	$result1=mysqli_query($conn,$query1);
	
	
	if(mysqli_num_rows($result1) > 0)
	{
		 echo "<table>";
            echo "<tr>";
       
                echo "<th>Name</th>";	
				echo "<th>Emailid</th>";
				echo "<th>Comment</th>";

    
            echo "</tr>";
		while($row = mysqli_fetch_array($result1)){
            echo "<tr>";
                 echo "<td>" . $row['name'] . "</td>";
				 echo "<td>" . $row['email'] . "</td>";
				 echo "<td>" . $row['comment'] . "</td>";
              
            echo "</tr>";
        }
		 echo "</table>";

		mysqli_free_result($result1);
	}
	else
	{
		echo "No records matching";
	}

	
	
		mysqli_close($conn);
?>
