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
    $totalres="";
    if (isset($_POST['submit']))
    {
        $sql="SELECT * FROM flight_details WHERE FROM1='$_POST[from]' AND TO1='$_POST[to]' AND Date1='$_POST[date]'";
        $res=mysqli_query($conn,$sql);
        $totalres=mysqli_num_rows($res);

        if($totalres>0)
			{
                
			}
			else
			{
				echo "<script>alert('Flight Not Found');</script>";
			}
    }


   /* if(isset($_POST['submit']))
    {
        $sql="SELECT * FROM flight_details WHERE FROM1='$_POST[from]' AND TO1='$_POST[to]' AND Date1='$_POST[date]'";
        $res=mysqli_query($conn,$sql);
        $totalres=mysqli_num_rows($res);
        
        if($totalres>0)
        {
            $_SESSION['FORM1']=$_POST['from'];
            $_SESSION['TO1']=$_POST['to'];
            $_SESSION['Date1']=$_POST['date'];
        }
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\flight_serch.css">
    <style>
        .submit
        {
            text-align:center;
        }
        
    </style>
</head>
<body class="flight_book_body">
    <div class="flight_book_div1">
        <img class="home-image" src="image\book3.png">
            <p class="flight_book_p">Search Your Flight</p>
                <form class="flight_book_form" action="flight_serch.php" method="post">
                    <label class="flight_book_label1" for="from">From : </label><input type="search" name="from" placeholder="First Letter Capital" autocomplete="off">
                    <label class="flight_book_label2" for="to">To : </label><input type="search" name="to" placeholder="First Letter Capital" autocomplete="off"><br>
                    <label class="flight_book_label3">Date : </label><input type="date" class="date" name="date">


                    <input class="flight_book_submit" type="submit" name="submit" value="Search">
                </form>

        <div class="tablediv">
            <table class="flight_detail_list">
                <tr>
                    <th>From
                    <th>To
                    <th>Date
                    <th>Time
                    <th>Available_Seat
                    <th>Flight Companie
                    <th>Flight Number
                    <th>Terminal
                    <th>Price
                    <th>Book
                </tr>

                <?php
                        if($totalres>0)
                        {
                            while($row=mysqli_fetch_array($res))
                            {
                                $from=$row['FROM1'];
                                $to=$row['TO1'];
                                $date=$row['Date1'];
                                $time=$row['Time1'];
                                $seat=$row['Available_Seat'];
                                $flight_com=$row['Flight_Companie'];
                                $flight_number=$row['Flight_Number'];
                                $gate=$row['Terminal'];
                                $price=$row['Price'];

                                $_SESSION['FROM']=$from;
                                $_SESSION['TO1']=$to;
                                $_SESSION['Date1']=$date;
                                $_SESSION['Flight_Number']=$flight_number;
                                $_SESSION['Price']=$price;
                                $_SESSION['flight_company']=$flight_com;
                                $_SESSION['Flight_time']=$time;
                                
                                ?>
                                <tr>
                                    <td><?=$from?></td>
                                    <td><?=$to?></td>
                                    <td><?=$date?></td>
                                    <td><?=$time?></td>
                                    <td><?=$seat?></td>
                                    <td><?=$flight_com?></td>
                                    <td><?=$flight_number?></td>
                                    <td><?=$gate?></td>
                                    <td><?=$price?></td>
                        <td><a class="book_butt" href="Signin.php">Book</a></td>
                                </tr>
                                <!--<input type="hidden" name="price" value="<?=$price?>">-->
                                <?php
                            }
                        }	
                       	
                    ?>


            </table>
        </div>
    </div>
</body>
</html>