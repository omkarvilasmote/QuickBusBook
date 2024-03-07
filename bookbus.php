<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="/css/home.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="/css/seat.css"> -->
    <link rel="stylesheet" href="css/bookbus.css">
    <!-- <link rel="stylesheet" href="/css/feedback.css"> -->

</head>
<body>
    
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

    <div class="nowabokkfinal">
        <div class="mainbookbus">
            <div class="mainonelastbusdiv">
                <h1><span><i class="ri-secure-payment-line"></i></span>Payment Page</h1><br>
                <div class="forQR">

                </div>
            </div>
        </div>
        <div class="busbooklast">

                <!-- <h2>Payment</h2> -->
            <form action="bookfinal.php" method='POST'>
                <?php
include("DB.php");

// $checkboxes = $_GET['checkboxes'];
$checkboxes = $_GET['checkboxes'];
$checkboxString = implode(",", $checkboxes);
$count = count($checkboxes);


$Boarding = $_GET['Boarding'];
$BoardingString = implode(",", $Boarding);
// $Bording = $_GET['Boarding'];

$Droping = $_GET['Dropping'];
$DropingString = implode(",", $Droping);
$BusNo = $_GET['BusNo'];



$query="SELECT * FROM buses WHERE BusNo='$BusNo'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    $amount = $row['Fare'];
    $Departure = $row['Departure'];
}

$finalAmount = $amount * $count;

                ?>
                
                <br>
                <input type="hidden" name="Departure" value="<?php echo ($Departure); ?>">
                <!-- <label for="Name"><span><i class="ri-user-line"></i></span> Name</label><br>
                <input type="text" name="Name" id=""><br>
                <br>

                <label for="email"><span><i class="ri-mail-line"></i></span> Email</label><br>
                <input type="email" name="email" id=""><br><br> -->

                <label for="PhoneNum"><span><i class="ri-phone-line"></i></span> Phone No</label><br>
                <input type="text" name="PhoneNum" id="" required><br><br>


                <label for="seatNo"><span><i class="ri-armchair-line"></i></span> seatNo</label><br>
                <?php echo '<input type="text" name="seatNo" id="" value='. $checkboxString .' readonly required>'?><br><br>

                <label for="BusNO"><span><i class="ri-bus-line"></i></span> BusNO</label><br>
             <?php echo '<input type="text" name="BusNO" id="" value='. $BusNo .' readonly required>'?><br><br>

                <label for="Uppoint"><span></span> Boarding Point</label><br>
                <?php echo '<input type="text" name="BPoint" id="" value='. $BoardingString .' readonly required>'?><br><br>

                <label for="STpoint"></i></span> Stop point</label><br>
                <?php echo '<input type="text" name="STDrop" id="" value='. $DropingString .' readonly required>'?><br><br>

                <label for="Amount"><span><i class="ri-money-rupee-circle-line"></i></span> Amount</label><br>
                <?php echo '<input type="text" name="Amount" id="" value='.$finalAmount.' readonly required>'?><br><br>

                <label for="PaymentID"><span><i class="ri-qr-code-fill"></i></span> PaymentID</label><br>
                <input type="text" name="PaymentID" id="" placeholder="Here Your Payment Transaction ID" required><br><br>

                <button>Pay now</button>
                <br>
<br>
            </form>

        </div>
    </div>

</body>
</html>