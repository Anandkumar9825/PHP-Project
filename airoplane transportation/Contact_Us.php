<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cp";

    session_start();
	//create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	//check connection
	if($conn->connect_error)
	{
		die ("Connection Error : ".$conn->connect_error);
	}

	if(isset($_POST['submit']))
	{
		$sql="INSERT INTO contect(Full_Name,Email_id,Question) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[question]')";
		$res=mysqli_query($conn,$sql);
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="css/Contactus.css">
</head>
<body>
	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>Have any question? Don't hesitate to get in touch.Our dedicated team<br>
			is here to assist you.</p>
		</div>
		<div class="container">
			<div class="contactinfo">
				<div class="box">
				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="text">
					<h3>Address</h3>
					<p>B7, Navdeep Complex,<br>Bopal,Ahmedabad,Gujarat.<br>364004.</p>
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
				</div>
				<div class="text">
					<h3>Phone</h3>
					<p>+91 234 567 8900<br>
					   +91 820 997 8900</p>
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<div class="text">
					<h3>Email</h3>
					<p>yma@gmail.com</p>
				</div>
			</div>
			</div>
			<div class="contactform">
				<form method="post" action="Contact_Us.php">
					<h2>Send Message</h2>
					<div class="inputbox">
						<input type="text" name="fullname" required="required">
						<span>Full Name</span>
					</div>
					<div class="inputbox">
						<input type="text" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputbox">
						<textarea required="required" name="question"></textarea>
						<span>Type Your Message....</span>
					</div>
					<div class="inputbox">
						<input type="submit" name="submit" value="Send">
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
</html>