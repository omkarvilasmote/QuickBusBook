<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buses !</title>
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
                    <td>FromBus</td>
                    <td>ToBus</td>
                    <td>Date</td>
                    <td>BusName</td>
                    <td>Departure</td>
                    <td>Duration</td>
                    <td>Arrival</td>
                    <td>Fare</td>
                    <td>Seats</td>
                    <td>BusNo</td>
                    <td>boarding</td>
                    <td>dropping</td>
                    <td>Action view</td>
                    <td>Action</td>
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
                    $query = 'SELECT * FROM buses';
                    $result = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){
                        
                        $FromBus = $row['FromBus'];
                        $ToBus = $row['ToBus'];
                        $Date = $row['Date'];
                        $BusName = $row['BusName'];
                        $Departure = $row['Departure'];
                        $Duration = $row['Duration'];
                        $Arrival = $row['Arrival'];
                        $Fare = $row['Fare'];
                        $Seats = $row['Seats'];
                        $BusNo = $row['BusNo'];
                        $boarding1 = $row['boarding1'];
                        $boarding2 = $row['boarding2'];
                        $boarding3 = $row['boarding3'];
                        $boarding4 = $row['boarding4'];
                        $boarding5 = $row['boarding5'];
                        $boarding = $boarding1.",".$boarding2.",".$boarding3.",".$boarding4.",".$boarding5;
                        
                        $dropping1 = $row['dropping1'];
                        $dropping2 = $row['dropping2'];
                        $dropping3 = $row['dropping3'];
                        $dropping4 = $row['dropping4'];
                        $dropping5 = $row['dropping5'];
                        $dropping = $dropping1.",".$dropping2.",".$dropping3.",".$dropping4.",".$dropping5;

                        echo "<th>$FromBus</th>";
                        echo "<th>$ToBus</th>";
                        echo "<th>$Date</th>";
                        echo "<th>$BusName</th>";
                        echo "<th>$Departure</th>";
                        echo "<th>$Duration</th>";
                        echo "<th>$Arrival</th>";
                        echo "<th>$Fare</th>";
                        echo "<th>$Seats</th>";
                        echo "<th>$BusNo</th>";
                        echo "<th>$boarding</th>";
                        echo "<th>$boarding</th>";
                        echo "<th><button><a href='admin_buses_view.php?BusNo=$BusNo'>View</a></th>";
                        echo "<th><button><a href='admin_buses_Delete.php?BusNo=$BusNo'>Delete</a></th>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>