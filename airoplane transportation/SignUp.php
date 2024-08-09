<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cp";

	//create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	//check connection
	if($conn->connect_error)
	{
		die ("Connection Error : ".$conn->connect_error);
	}
	//data saved
	if(isset($_POST['submit']))
	{
		$sql="INSERT INTO login_client(First_Name,Last_Name,User_Name,Email_id,Password) 
		VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[email]','$_POST[password]')";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			header ("Location:http://localhost/meet/airoplane%20transportation/Signin.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="css/Sign.css">

</head>
<body>
	<div class="signup-box">
	   <h1>Sign Up</h1>
	   <form action="SignUp.php" method="post">

	     <label>First Name</label>
		 <input type="text" name="fname" placeholder="Enter First Name" autocomplete="off" required>
		 
		 <label>Last Name</label>
		 <input type="text" name="lname" placeholder="Enter Last Name" autocomplete="off" required>

		 <label>User Name</label>
		 <input type="text" name="username" placeholder="Enter user Name" autocomplete="off" required>
		 
		 <label>Email</label>
		 <input type="email" name="email" placeholder="abc123@gmail.com" autocomplete="off" required>
		 
		 <label>Password</label>
		 <input type="password" name="password" autocomplete="off" required>		 
		 
		 <input type="submit" name="submit" value="Submit" onclick="back()">
	   </form>
	   <p>By clicking the Sign Up button,you agree to our <br>
	   <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy.</a>
	   </p>
	</div>
	<p class="para-2">Already have an account? <a href="SignIn.php">SignIn here</a></p>


</body>
</html>