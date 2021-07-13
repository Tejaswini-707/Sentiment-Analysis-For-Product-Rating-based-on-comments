
		
<?php
$nameerr= $firstnameErr = $lastnameerr = $middlenameerr = $photoerr = $emailErr = $addresserr = $additionalremarkerr = $phonenumbererr = $usererr= $passwderr = $confirmpwderr = $genderErr =  "";
$firstname = $middlename = $photo = $lastname = $address = $email = $gender = $additionalremark = $phonnumber = $username = $password = $confirmpassword = "";
$flag=true;
$flag1=false;

if(isset($_POST['submit']))
{
		$firstname = $_POST["firstn"];
		$lastname = $_POST["lastn"];
		$email =$_POST["emailid"];
		$gender =$_POST["gend"];
		$phonnumber=$_POST["phonnum"];
		$address=$_POST["addres"];
		$username=$_POST["userna"];
		$password=$_POST["passw"];
		$confirmpassword = $_POST["confirmpass"];
		
  if(empty($firstname))
  {
    $nameerr = "Name is required";
	$flag=false;
  }
  else if(!preg_match("/^[A-Za-z]+$/",$firstname))
	{
		$firstnameErr= "Name must contain characters";
		$flag=false;
	}
  
 
  
  if (empty($lastname))
  {
    $nameerr = "Name is required";
	$flag=false;
  } 
  else if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameerr = "Only letters and white space allowed";
	  $flag=false;
  }
  
  if (empty($email)) {
    $emailErr = "Email is required";
	$flag=false;
  } 
    
	
	if (empty($address)) 
	{
    $addresserr = "address is required";
	$flag=false;
	}  

  
  if (empty($gender)) 
  {
    $genderErr = "Gender is required";
	$flag=false;
  } 
  
   if (empty($phonnumber)) {
    $phonenumbererr = "phone number is required";
	$flag=false;
  } 
  
   
  if (empty($username)) {
    $usererr = "User name is required";
	$flag=false;
  } 
  
  if (empty($password)) {
    $file = $_FILES['image'] ['tmp_name'];
	if(!isset($file))
		echo "Please select an image";
	else
	{
		$image= file_get_contents(['image'] ['tmp_name']);
		$image_name=$_FILES['image'] ['name'];
		$image_size= getimagesize($_FILES['image']['tmp_name']);
		
		if(image_size==FALSE)
		{
			echo "Thats not an image";
		}
	}

  } 
  
  if (empty($confirmpassword)) {
    $confirmpwderr = "password is required";
	$flag=false;
  } 
  $flag1=true;
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>

<style>
input[type=text]
{
	width:55%;
	size:30%;
	font-size:18p;
}
input[type=password]
{
	width:55%;
	font-size:18p;
}
</style>
</head>

<body style="background-image:url('back.jpg'); background-size:cover;">
		<h1 style= "font-size:50px"  align="center">SignUp Page</h1>
		
	
		<div style="background:transparent; font-size:19px; height:800px; width:530px;  padding-left:20px; margin-left:450px; border: 3px solid black; border-radius: 30px;">
		<pre>
<form action="signupdatabase1.php" method="post" enctype="multipart/form-data">
 
  <b>First Name</b>  : <input type="text" name="firstn" placeholder="Enter your first name"> </textarea>
  <?php echo $nameerr;?>
  <?php echo $firstnameErr;?><br>
  <b>Last Name </b>  : <input type="text" name="lastn" placeholder="Enter your last name"> 
  <?php echo $nameerr;?>
  <?php echo $lastnameerr;?><br>
  <label><b>Gender</b> </label>     : <input type="radio" name="gend" value="female" checked>Female <input type="radio" name="gend" value="male"> Male <br>
  <b>E-mail</b>      : <input type="text" name="emailid" placeholder="Enter your email">
 <?php echo $emailErr;?><br>
  <b>Address </b>    : <input type="text" name="addres" placeholder="Enter your address">
  <?php echo $addresserr;?><br>
  <b>Phone Number</b>: <input type="text" name="phonnum" placeholder="Enter your phone number">
 <?php echo $phonenumbererr;?><br>
  <b>Username </b>   : <input type="text" name="userna" placeholder="Enter your username">
 <?php echo $usererr;?><br>
  <b>Password </b>   : <input type="password" name="passw" placeholder="Enter your password">
 <?php echo $passwderr;?><br>
  <b>Confirm Password</b>: <input type="password" name="confirmpass" placeholder="Confirm your password">

 
                     <button type="submit" name="submit"  width="70px" height="40px"><b>submit</b></button>  <button type="reset"   width="70px" height="40px"><b>Clear</b></button><br>
                     <a href="homepage.php">Back to home</a>
</form>

</pre>
 </div>   
</body>
</html>
