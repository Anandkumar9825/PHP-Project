<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cp";
	
	session_start();
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error)
	{
		die ("Connection Faild: ".$conn->connect_error);
	}
	
		if(isset($_POST['submit']))
		{
			$sql="SELECT * FROM login_client WHERE User_Name='$_POST[username]' AND Password='$_POST[password]'";
			$res=mysqli_query($conn,$sql);
			$totalres=mysqli_num_rows($res);
			
			if($totalres>0)
			{
				$_SESSION['User_Name']=$_POST['username'];
				header ("Location:http://localhost/meet/airoplane%20transportation/book.php");
			}
			else
			{
				echo "<script>alert('User Not Found');</script>";
			}
		}
	
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
<link rel="stylesheet" href="css/Sign.css">
</head>
<body>
	<div class="signin-box">
	  <h1>Login</h1>
	  <form action="SignIn.php" method="post">
	     <label>User Name</label>
	     <input type="text" name="username" autocomplete="off" required >

		 <label>Password</label>
		 <input type="password" name="password" autocomplete="off" required>

		<!-- <label class="show">Show Password</label><input type="checkbox" onclick="show()">-->
		 <input type="submit" target="_blank" name="submit" value="Submit">

	  </form>
	</div>
	<p class="para-2">Not have an account? <a href="SignUp.php">Sign Up Here</a></p>

	<!--<script>
		function show()
		{
			var x = document.getElementById("password");
			
				if (x.type === "password")
				{
					x.type = "text";
				}
				else
				{
					x.type = "password";
				}
		}
		
	</script>
	-->
</body>
</html>