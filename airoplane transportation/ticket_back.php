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

        if(isset($_GET['No']))
        {
            $no=$_GET['No'];
            $sql="DELETE FROM booking WHERE No=$no";
            $res=mysqli_query($conn,$sql);
            if($res)
            {
                header("Location:http://localhost/meet/airoplane%20transportation/Cancel.php");
            }
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ticket_back.css">
</head>
<body>



<div class="cont">
        <div class="log">
            <a class="logout" href="home.php">Logout</a><h1>User:</h1> <h3><?=$_SESSION['User_Name']?></h3>
        </div>
    </div>
           

                <?php
                        if($totalres>0)
                        {
                            while($row=mysqli_fetch_array($res))
                            {
                                $no=$row['No'];
                                $fullname=$row['Full_Name'];
                                $from1=$row['From1'];
                                $to1=$row['To1'];
                                $flight_date=$row['Flight_Date'];
                                $flight_number=$row['Flight_Number'];
                                $flight_company=$row['Flight_Company'];
                                $flight_time=$row['Flight_Time'];
                               
                                $_SESSION['Fullname']=$fullname;
                                $_SESSION['FROM1']=$from1;
                                $_SESSION['TO1']=$to1;
                                $_SESSION['Flight_Number']=$flight_number;
                                
                                ?>

<div class="div1">
<form method="POST" action="ticket.php">
        <div>
            <img class="logo" src="image/logo2.png" alt="logo"><span class="name">YMA Flight Ticket</span>
        </div>

                    
                        <div  class="div2">
                            <input type="hidden" name="no" value="<?=$no?>">
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

                                    
                                   
                                
                
                <?php
            }
        }	
        
    ?>

    <div class="cnasel">
        <a class="a" href="ticket_back.php?No=<?=$no?>">Cancel Your Ticket</a>
    </div>
</body>
</html>