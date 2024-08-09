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
		$sql="INSERT INTO flight_details(FROM1,TO1,Date1,Time1,Available_Seat,Flight_Companie,Flight_Number,Terminal,Price) 
		VALUES ('$_POST[from]','$_POST[to]','$_POST[date]','$_POST[time]','$_POST[seat]','$_POST[flightcompany]','$_POST[flightnumber]','$_POST[terminal]','$_POST[price]')";
		$res=mysqli_query($conn,$sql);
		
	}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="insert_body">
        <form action="insert.php" method="post">
            <p class="heading">Flight Details</p>
            <div class="div1">
                <p class="text">From</p><input type="text" class="input" name="from" required>
                <p class="text">To</p><input type="text" class="input" name="to" required>
                <p class="text">Date</p><input type="date" class="input" name="date" required>
                <p class="text">Time</p><input type="time" class="input" name="time" required>
            </div>

            <div class="div2">
                <p class="text">Available Seat</p><input type="text" class="input" name="seat" required>
                <p class="text">Flight Company</p><input type="text" class="input" name="flightcompany" required>
                <p class="text">Flight Number</p><input type="text" class="input" name="flightnumber" required>
                <p class="text">Terminal</p><input type="text" class="input" name="terminal" required>
            </div>
            
            <div class="submit">
                <p class="text2">Price</p><input type="text" class="input2" name="price" required>
                <input type="submit" class="insert_submit" value="Submit" name="submit" >
            </div>
        </form>
</body>
</html>