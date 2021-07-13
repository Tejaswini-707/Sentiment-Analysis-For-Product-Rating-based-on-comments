
<?php

 
// Create connection
	$conn = mysqli_connect("localhost","root","", "dbex");

// Check connection
	if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		//echo "Connected successfully.";
		


	
	
	$query1="Select * from info";
	$result1=mysqli_query($conn,$query1);
	
	
	if(mysqli_num_rows($result1) > 0)
	{
		 echo "<table border= '5'>";
            echo "<tr>";
       
                echo "<th>First_name</th>";	
				echo "<th>Last_name</th>";
				echo "<th>Gender</th>";
				echo "<th>Emailid</th>";
				echo "<th>Phone_number</th>";
				echo "<th>Address</th>";
				echo "<th>Username</th>";
				echo "<th>Password</th>";
				echo "<th>Confirm_Password</th>";
    
            echo "</tr>";
		while($row = mysqli_fetch_array($result1)){
            echo "<tr>";
                 echo "<td>" . $row['firstname'] . "</td>";
				 echo "<td>" . $row['Lastname'] . "</td>";
				 echo "<td>" . $row['Gender'] . "</td>";
				 echo "<td>" . $row['Email'] . "</td>";
				 echo "<td>" . $row['Mobilenumber'] . "</td>";
				 echo "<td>" . $row['Address'] . "</td>";
		     	 echo "<td>" . $row['username'] . "</td>";
			     echo "<td>" . $row['password'] . "</td>";
				 echo "<td>" . $row['confirmpass'] . "</td>";
              
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
