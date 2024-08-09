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
		$sql="INSERT INTO booking(Full_Name,From1,To1,Flight_Date,Flight_Number,Flight_Company,Flight_Time,Email_id,Phone_Number,Date_Of_Birth,Gender,Card_Holder_Name,Card_Number,Card_Cvc,Expiry_Date,Payment) 
		VALUES ('$_POST[fullname]',
        '$_POST[from]',
        '$_POST[to]',
        '$_POST[flight_date]',
        '$_POST[flight_number]',
        '$_POST[flight_company]',
        '$_POST[flight_time]',
        '$_POST[email]',
        '$_POST[phone_number]',
        '$_POST[birth]',
        '$_POST[gendar]'
        ,'$_POST[holder_name]',
        '$_POST[card_number]',
        '$_POST[cvc]',
        '$_POST[expiry_date]',
        '$_POST[payment]')";

		$res=mysqli_query($conn,$sql);
		
		
	}



    //first we are accessing number from database
    if(isset($_POST['submit']))
    {
        $sql_show = "SELECT Available_Seat FROM flight_details WHERE FROM1='$_POST[from]' AND TO1='$_POST[to]' AND Date1='$_POST[flight_date]' AND Time1='$_POST[flight_time]' AND Flight_Number ='$_POST[flight_number]'";
        $res_show = mysqli_query($conn, $sql_show);
        
        if($res_show){
            $row = mysqli_fetch_array($res_show);
            $num = $row['Available_Seat'];
            
        }
    }
    // here we are updating the data when we click buy
    if(isset($_POST['submit'])){
        
        $sql_update = "UPDATE flight_details SET Available_Seat = $num - 1 WHERE FROM1='$_POST[from]' AND TO1='$_POST[to]' AND Date1='$_POST[flight_date]' AND Time1='$_POST[flight_time]' AND Flight_Number ='$_POST[flight_number]'";
        $res_update = mysqli_query($conn,$sql_update);

        if($res_update)
        {
            
			header ("Location:http://localhost/meet/airoplane%20transportation/ticket_back.php");
		
        }
    
    }

?>


    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/book.css">
</head>

<body>
    <div class="cont">
        <div class="log">
            <a class="logout" href="home.php">Logout</a><h1>User:</h1> <h3><?=$_SESSION['User_Name']?></h3>
        </div>
    </div>
    
    <div class="wrapper">
        <h2>Booking Form</h2>
        <form method="POST" action="book.php">
            <h4>Book Your Ticket</h4>

            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" name="fullname" required class="name" autocomplete="off">
                    <i class="fa fa-user icon"></i>
                </div>

                <!--<div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>-->
            </div>


            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="From" name="from" readonly value="<?=$_SESSION['FROM']?>" required class="name ok">
                    <i class="fa fa-paper-plane-o icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="To" name="to" readonly value="<?=$_SESSION['TO1']?>" required class="name ok">
                    <i class="fa fa-paper-plane icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <input type="text" name="flight_date" readonly value="<?=$_SESSION['Date1']?>" required class="name ok">
                    <i class="fa fa-calendar icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="flight_number" readonly value="<?=$_SESSION['Flight_Number']?>" required class="name ok">
                    <i class="fa fa-file icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <input type="text" name="flight_company" readonly value="<?=$_SESSION['flight_company']?>" required class="name ok">
                    <i class="fa fa-building icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="flight_time" readonly value="<?=$_SESSION['Flight_time']?>" required class="name ok">
                    <i class="fa fa-clock-o icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" name="email" required class="name" autocomplete="off">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <!--<input type="text" placeholder="Phone Number" name="phone_number" maxlength="10" required class="name" autocomplete="off">-->
                    <input type="tel" placeholder="Phone Number" name="phone_number" maxlength="10" required class="name" autocomplete="off">
                    <i class="fa fa-phone icon"></i>
                </div>
            </div>


           

            <div class="input-group">
                <div class="input-box">
                    <h4> Date of Birth</h4>
                    <input type="date" class="dob" name="birth" autocomplete="off">
                    <i class="fa fa-birthday-cake icon2"></i>
                </div>



                <div class="input-box">
                    <h4> Gender</h4>
                    <input type="radio" id="b1" name="gendar" value="Male" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" value="Female" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Holder Name" name="holder_name" required class="name" autocomplete="off">
                    <i class="fa fa-user-circle icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <!--<input type="text" placeholder="Card Number" name="card_number" required class="name" autocomplete="off">-->
                    <input type="tel" placeholder="Card Number" name="card_number" required class="name" autocomplete="off">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>

            <div class="input-group">
                
                <div class="input-box">
                    <h4>Card CVC</h4>
                    <input type="text" class="dob" name="cvc" autocomplete="off">
                    <i class="fa fa-user icon2"></i>
                </div>
                
                <!--<div class="input-box">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>-->

                <div class="input-box">
                    <h4>Expiry Date</h4>
                    <input type="date" class="dob" name="expiry_date" autocomplete="off">
                    <i class="fa fa-calendar-times-o icon2"></i>
                </div>

            </div>


            <div class="input-box">
                    <input type="number" placeholder="Payment" required class="name ok" value="<?=$_SESSION['Price']?>" name="payment" readonly>
                    <i class="fa fa-rupee icon"></i>
            </div>
        

            <div class="input-group">
                <div class="input-box">
                    <button type="submit" name="submit">CONFIRM NOW</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>