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
    
        $sql="SELECT * FROM flight_details";
        $res=mysqli_query($conn,$sql);
        $totalres=mysqli_num_rows($res);
    
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/edit_data.css">
</head>
<body>
<div class="tablediv">
            <table class="flight_detail_list" bordre="2">
                <tr>
                    <th>No
                    <th>From
                    <th>To
                    <th>Date
                    <th>Time
                    <th>Reserve Seat
                    <th>Flight Companie
                    <th>Flight Number
                    <th>Terminal
                    <th>Price
                    <th>Edit
                </tr>

                <?php
                        if($totalres>0)
                        {
                            while($row=mysqli_fetch_array($res))
                            {
                                $no=$row['No'];
                                $from=$row['FROM1'];
                                $to=$row['TO1'];
                                $date=$row['Date1'];
                                $time=$row['Time1'];
                                $seat=$row['Available_Seat'];
                                $flight_com=$row['Flight_Companie'];
                                $flight_number=$row['Flight_Number'];
                                $gate=$row['Terminal'];
                                $price=$row['Price']
                                
                                ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$from?></td>
                                    <td><?=$to?></td>
                                    <td><?=$date?></td>
                                    <td><?=$time?></td>
                                    <td><?=$seat?></td>
                                    <td><?=$flight_com?></td>
                                    <td><?=$flight_number?></td>
                                    <td><?=$gate?></td>
                                    <td><?=$price?></td>
                        <td><a href="insert2.php?No=<?=$no?>"><input type="submit" class="submit" value="Edit"></a></td>
                                </tr>
                                <?php
                            }
                        }	
                       	
                    ?>


            </table>
        </div>
</body>
</html>