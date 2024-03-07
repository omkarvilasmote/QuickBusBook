<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase History !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

        <!-- <nav>
            <a href=""><button>Back To Search</button></a>
        </nav> -->

        <div class="navigation">
            <nav>
                <div class="logo"></div>
                <ul>
                <li class="activ"><a href="admin.php">Users</a></li>
                    <li class="activ"><a href="admin_CreateBus.php">Create BUS</a></li>
                    <li class="activ"><a href="admin_buses.php">buses</a></li>
                    <li class="activ"><a href="admin_oldbuses.php">Old Buses</a></li>
                    <li class="activ"><a href="admin_feedback.php">feedback</a></li>
                    <li class="activ"><a href="admin_Contact.php">Contact</a></li>
                    <li class="activ"><a href="admin_PurHistory.php">Purchase History</a></li>
                    <li class="active"><a href="#"><i class="ri-account-circle-line"></i>Admin</a></li>';
                </ul>
            </nav>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="adminuser">
    <center>
        <table>
            <tbody>
                <tr>
                    <td>Email</td>
                    <td>PhoneNo</td>
                    <td>seatNo</td>
                    <td>BusNO</td>
                    <td>boarding</td>
                    <td>dropping</td>
                    <td>Amount</td>
                    <td>PaymentID</td>
                    <td>purchase_date</td>
                    <td>boardingtime</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                <?php
                $cook = $_COOKIE['ADMIN'];
                // echo $emailV;
                if(!$cook){
                    header("Location: login.php");
                }
                
                    include("DB.php");
                    $query = 'SELECT * FROM purchases';
                    $result = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){
                        $email = $row['email'];
                        $PhoneNum = $row['PhoneNum'];
                        $seatNo = $row['seatNo'];
                        $BusNO = $row['BusNO'];
                        $BPoint = $row['BPoint'];
                        $STDrop = $row['STDrop'];
                        $Amount = $row['Amount'];
                        $PaymentID = $row['PaymentID'];
                        $purchase_date = $row['purchase_date'];
                        $boardingtime = $row['boardingtime'];

                        echo "<th>$email</th>";
                        echo "<th>$PhoneNum</th>";
                        echo "<th>$seatNo</th>";
                        echo "<th>$BusNO</th>";
                        echo "<th>$BPoint</th>";
                        echo "<th>$STDrop</th>";
                        echo "<th>$boardingtime</th>";
                        echo "<th>$Amount</th>";
                        echo "<th>$PaymentID</th>";
                        echo "<th>$purchase_date</th>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>