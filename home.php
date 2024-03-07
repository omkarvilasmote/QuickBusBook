<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a bus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        table {
            border-collapse: collapse;
            /* width: 100%; */
            margin-top: 100px;
        }

        th,
        td {
            /* border: 1px solid black; */
            padding: 8px;
            /* text-align: left; */
        }

        th {
            /* background-color: #f2f2f2; */
            /* margin: 10px; */
            color: #ffa8ba;
            font-weight: bold;
        }
    </style>
</head>

<body>

        <!-- <nav>
            <a href=""><button>Back To Search</button></a>
        </nav> -->

        <div class="navigation">
            <nav>
                <div class="logo"></div>
                <ul>
                <li class="activ"><a href="index.php">Home</a></li>
                    <li class="activ"><a href="about.php">About</a></li>
                    <li class="activ"><a href="contactus.php">Contact</a></li>
                    <li class="activ"><a href="feedback.php">Feedback</a></li>
                    <li class="activ"><a href="history.php"> <i class="ri-history-line"></i>History</a></li>
                    <?php
                    include("DB.php");

                    $emailV = $_COOKIE['AUTH'];
                    // echo $emailV;
                    if(!$emailV){
                        header("Location: login.php");
                    }
                    $query = "SELECT * FROM login WHERE email='$emailV'";
                    $result = mysqli_query($conn,$query);
                    if($result){
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['Name'];
                        echo '<li class="active"><a href="#"><i class="ri-account-circle-line"></i>' . $name . '</a></li>';
                    }
                    

                    
                    
                    ?>
                </ul>
            </nav>
        </div>

        <div class="main">

            <table>
                <thead>
                    <tr>
                        <th>Bus Name</th>
                        <th>Departure</th>
                        <th>Duration</th>
                        <th>Arrival</th>
                        <th>Fare</th>
                        <th>Seats Available</th>
                    </tr>
                </thead>
                <br>
                <br>

                <?php
$form = $_POST['form'];
$to = $_POST['to'];
$date = $_POST['date'];

// echo $form.$to.$date;

include("DB.php");

$query = "SELECT * FROM Buses WHERE FromBus='$form' AND ToBus='$to' AND Date='$date'";
$resultdata = mysqli_query($conn, $query);

?>

<tbody>
<?php
while($row = mysqli_fetch_assoc($resultdata)) {
    ?>
    <tr>
        <td></td>
    </tr>
    <tbody>
    <tr class="datashow">
        <td><span><i class="ri-bus-2-fill"></i></span> <?php echo $row['BusName']; ?></td>
        <td><?php echo $row['Departure']; ?></td>
        <td><?php echo $row['Duration']; ?></td>
        <td><?php echo $row['Arrival']; ?></td>
        <td><span>INR</span> <?php echo $row['Fare']; ?></td>
        <td><?php echo $row['Seats']; ?> available</td>
        <td><a href="seats.php?BusNo=<?php echo $row['BusNo']; ?>"><button class="linkbooknow">Book Now</button></a></td>
    </tr>
    </tbody>
    <?php
}
?>

                
            </table>

        </div>
    
</body>

</html>