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
   
    if(isset($_GET['No']))
	{
		$no=$_GET['No'];
		$sql="SELECT * FROM flight_details WHERE No=$no";
		$res=mysqli_query($conn,$sql);
		$totalrec=mysqli_num_rows($res);
		if($totalrec>0)
			{
				$row=mysqli_fetch_array($res);
				$no=$row['No'];
                $from=$row['FROM1'];
                $to=$row['TO1'];
                $date=$row['Date1'];
                $time=$row['Time1'];
                $seat=$row['Available_Seat'];
                $flight_com=$row['Flight_Companie'];
                $flight_number=$row['Flight_Number'];
                $gate=$row['Terminal'];
			}
           
	}
	
	if(isset($_POST['edit']))
	{
		$sql="UPDATE flight_details SET FROM1='$_POST[from]',TO1='$_POST[to]',Date1='$_POST[date]',Time1='$_POST[time]',
        Available_Seat='$_POST[seat]',Flight_Companie='$_POST[flightcompany]',Flight_Number='$_POST[flightnumber]',Terminal='$_POST[terminal]',Price='$_POST[price]'
        WHERE No=$_POST[textno]";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			header("Location:http://localhost/meet/admin_side/edit_data.php");
		}
		
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
        <form action="insert2.php" method="post">
            <p class="heading">Edit Flight Details</p>
            <div class="div1">
		        <input type="hidden" name="textno" value="<?=$no?>">
                <p class="text">From</p><input type="text" class="input" name="from" value="<?=$from?>" required>
                <p class="text">To</p><input type="text" class="input" name="to" value="<?=$to?>" required>
                <p class="text">Date</p><input type="date" class="input" name="date" value="<?=$date?>" required>
                <p class="text">Time</p><input type="time" class="input" name="time" value="<?=$time?>" required>
            </div>

            <div class="div2">
                <p class="text">Available Seat</p><input type="text" class="input" name="seat" value="<?=$seat?>" required>
                <p class="text">Flight Company</p><input type="text" class="input" name="flightcompany" value="<?=$flight_com?>" required>
                <p class="text">Flight Number</p><input type="text" class="input" name="flightnumber" value="<?=$flight_number?>" required>
                <p class="text">Terminal</p><input type="text" class="input" name="terminal" value="<?=$gate?>" required>
            </div>
            
            <div class="submit">
                <p class="text2">Price</p><input type="text" class="input2" name="price" required>
                <input type="submit" class="insert_submit" value="Edit" name="edit">
            </div>
        </form>
</body>
</html>