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

    $sql="SELECT * FROM booking";
    $res=mysqli_query($conn,$sql);
    $totalres=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ticket.css">
</head>
<body>
<div class="cont">
        <div class="log">
            <a class="logout" href="home.php">Logout</a><h1>User:</h1> <h3><?=$_SESSION['User_Name']?></h3>
        </div>
    </div>
    
    

    <div class="div1">
        <div>
            <img class="logo" src="image/logo2.png" alt="logo"><span class="name">YMA Flight Ticket</span>
        </div>

                    <form method="POST" action="ticket.php">
                        <div  class="div2">
                            <p class="p1">Passenger Name</p>
                            <input class="passinput" type="text" name="fullname" value="<?=$fullname?>" readonly id="" >

                            <p class="p2">Time</p>
                            <input class="time-date" type="text" name="time" value="<?=$flight_time?>" id="">

                            <p class="p2">Date</p>
                            <input class="time-date" type="text" name="date" value="<?=$flight_date?>" id="">

                            <p class="p2">Flight Number</p>
                            <input class="time-date1" type="text" name="flight_number" value="<?=$flight_number?>" id="">

                            <!--<p class="p2">Terminal</p>
                            <input class="time-date" type="text" name="terminal" value="*" id="">-->
                        
                            <img class="barcode" src="image/barcode.png" alt="">
                        
                        <div class="div2right">
                            <p class="p3">From</p>
                                <input class="from" type="text" name="from" value="<?=$from1?>" id="">

                            <p class="p3_1">To</p>
                            <input class="from" type="text" name="to" value="<?=$to1?>" id="">

                            <p class="p3_2">Flight Company</p>
                                <input class="from" type="text" name="from" value="<?=$flight_company?>" id="">

                            <p class="p3_3">Class</p>
                            <input class="from" type="text" name="to" value="Economy Seat" id="">


                            </div>
                        
                        </div>
                    
        </form>
</div>
</body>
</html>