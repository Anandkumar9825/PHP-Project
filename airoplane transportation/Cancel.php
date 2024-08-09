<?php

    session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Cancelled Ticket</title>
<link rel="stylesheet" href="css/Cancel.css">

</head>
<body>

<div class="cont">
    <div class="log">
        <a class="logout" href="home.php">Logout</a><h1>User:</h1> <h3><?=$_SESSION['User_Name']?></h3>
    </div>
</div>


<div class="main">
    <h2>Dear <span><?=$_SESSION['Fullname']?></span>,</h2>
    <p>We wish to inform  you that your ticket against Flight Number: <span><?=$_SESSION['Flight_Number']?></span> has been cancelled successfully as 
    per your request.The refund amount of <b>Rs. <span><?=$_SESSION['Price']?></span> </b> <br>
    will be refunded back to your respective account shortly.<br><br>
    For any problem please contact us 24x7 Hrs.Customer Support at<b> 14646 OR 0755-6610661/0755-4090600 (Language:Hindi and English).</b>
    <br>
    <br>
    <b>Warm Regards,</b><br>
    Customer Care<br>
    Internet Ticketing<br>
    YMA Travels.</p>
</div>
</body>
</html>