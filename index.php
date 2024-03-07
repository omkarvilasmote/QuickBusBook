<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navigation">
        <nav>
            <div class="logo"></div>
            <ul>
                <li class="activ"><a href="about.php">About</a></li>
                <li class="activ"><a href="contactus.php">Contact Us</a></li>
                <li class="activ"><a href="feedback.php">Feedback</a></li>
                <?php
                    include("DB.php");

                    $emailV = $_COOKIE['AUTH']??'';
                    // if(!$emailV){
                    //     header("Location: login.php");
                    // }
                    // echo $emailV;
                    $query = "SELECT * FROM login WHERE email='$emailV'";
                    $result = mysqli_query($conn,$query);
                    if($result){
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['Name']??'Login';
                        echo '<li class="active"><a href="login.php"><i class="ri-login-box-line"></i>' . $name . '</a></li>';
                    }
                    ?>
                <!-- <li class="active"><a href="login.php"><i class="ri-login-box-line"></i> Login</a></li> -->
            </ul>
        </nav>
    </div>

    
    <main>
        <div class="maintitle">
            <h1><span>QuickBusBook </span>Streamlined Bus Booking</h1>
        </div>
        <div class="content1">
            <div class="content2">
                <form action="home.php" method="post">
                    <!-- <label for="form">From</label> -->
                    <input type="text" name="form" id="" placeholder="From" required>
                    <!-- <label for="to">To</label> -->
                    <input type="text" name="to" id="" placeholder="To" required>
                    <!-- <label for="Date">Date</label> -->
                    <input type="date" name="date" id="date" required>
                    <input type="submit" value="Search bus" id="buttonsearch">
                    <!-- <button>Search bus</button> -->
                </form>
            </div>
        </div>
    </main>
    <!-- main2 -->
    <div class="main2">
        <div class="main2in2">
            <div class="main2in2in2">
                <!-- <div class="lableforoffers">Offers</div> -->
                <div class="boxforoffer">
                    <h2>Early Bird Special</h2>
                    <p>Book your bus tickets in advance and enjoy discounted fares. Save up to 20% on select routes when
                        you book at least 14 days before your departure date. </p>
                </div>
                <div class="boxforoffer">
                    <h2>Weekend Getaway Offer</h2>
                    <p>Planning a weekend trip? Take advantage of our Weekend Getaway Offer and get 15% off on
                        round-trip bookings for travel between Friday and Sunday. </p>
                </div>
                <div class="boxforoffer">
                    <h2>Family Discount</h2>
                    <p>Traveling with family? Enjoy special discounts on group bookings. Save 10% on bookings for 4 or
                        more passengers traveling together on the same route. </p>
                </div>
                <div class="boxforoffer">
                    <h2>Student Discount</h2>
                    <p>Attention students! Present your valid student ID and get an exclusive discount of 15% on all bus
                        tickets booked through our website. </p>
                </div>
                <div class="boxforoffer">
                    <h2>Frequent Traveler Rewards</h2>
                    <p>Join our loyalty program and earn points with every booking. Redeem your points for discounts,
                        free upgrades, and other rewards on future trips.</p>
                </div>
            </div>
        </div>
        <div class="main2in2">
            <div class="main2in2in2in2"></div>
        </div>
    </div>
    <br>
    <br>
    <!-- main3 -->
    <div class="main3">
        <div class="lableforoffers">
            <h1>safety insurance</h1>
        </div>
        <div class="main3box">
            <div class="main3box1">
                <h2>Insurance Coverage:</h2>
                <p><span><i class="ri-focus-fill"></i></span>Ensure all bus operators provide comprehensive insurance covering passenger liability for accidents or injuries during journeys.

</p>
                <p>Insurance coverage is essential for protecting passengers in case of unforeseen accidents or incidents during their journey. Comprehensive insurance should cover medical expenses, property damage, and other liabilities, providing financial security for passengers and operators alike. It's important to verify the adequacy of insurance coverage to ensure passengers are adequately protected in the event of an emergency.
</p>
            </div>
        </div>

        <div class="main3box">
            <div class="main3box1">
                <h2>Driver Qualifications:</h2>
                <p><span><i class="ri-focus-fill"></i></span>Verify drivers' licenses, experience, and training to guarantee safe driving practices.

</p>
                <p>The qualifications and competence of bus drivers directly impact passenger safety. By verifying drivers' licenses, experience, and training, you ensure that only qualified individuals operate the buses listed on your platform. Experienced and well-trained drivers are more likely to adhere to safe driving practices, reducing the risk of accidents and ensuring a smoother and safer journey for passengers.

                </p>
            </div>
        </div>

        <div class="main3box">
            <div class="main3box1">
                <h2>Coverage Details:</h2>
                <p><span><i class="ri-focus-fill"></i></span>Specify the types of incidents covered by the safety insurance, such as accidents,
                    medical emergencies, trip cancellations, or baggage loss.</p>
                <p>Explain the extent of coverage provided, including reimbursement for medical expenses, compensation
                    for trip interruptions, or liability protection in case of accidents.
                </p>
            </div>
        </div>

        <div class="main3box">
            <div class="main3box1">
                <h2>Emergency Preparedness:</h2>
                <p><span><i class="ri-focus-fill"></i></span>Mandate emergency protocols, including accident response plans and evacuation procedures, for all bus operators.

</p>
                <p>Emergency preparedness is critical for ensuring passenger safety in the event of accidents or unforeseen emergencies. By mandating accident response plans and evacuation procedures, bus operators are better equipped to handle various emergency scenarios effectively. This includes procedures for notifying emergency services, providing first aid to injured passengers, and safely evacuating passengers from the bus if necessary. Having well-defined emergency protocols in place enhances passenger confidence and ensures a prompt and coordinated response in times of crisis.

                </p>
            </div>
        </div>

        <div class="main3box">
            <div class="main3box1">
                <h2>Vehicle Maintenance Records:</h2>
                <p><span><i class="ri-focus-fill"></i></span>Require bus operators to provide documentation of regular vehicle maintenance to ensure vehicles are in optimal condition.

</p>
                
            </div>
        </div>


        <br>
        <br>
    </div>


    <!-- main3 -->
    <br>
    <br>
    <div class="main4">
        <div class="main4titel">
            <h2>Review</h2>
        </div>
        <div class="maininmain4">
        <?php
include("DB.php");

$querry = 'SELECT * FROM review';
$result = mysqli_query($conn, $querry);
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $about = $row['about'];
    echo '<div class="main4box">';
    echo "<h4><i class='ri-bard-line'></i>$name<i class='ri-bard-line'></i></h4>";
    echo "</br>";
    echo "<p>$about</p>";
    echo "</div>";
}
?>

            
        </div>
    </div>

    <br>
    <br>
    <footer>
        <div class="footer1">
            <div class="footer1in"></div>
        </div>
        <div class="footer2">
            <div class="footer1in2">
                <p>
                    "Welcome to QuickBusBook, where bus booking is made easy and efficient. With our streamlined
                    platform, you can book your bus tickets in just a few clicks, saving you time and hassle. Say
                    goodbye to long queues and complicated booking processes. Whether it's a spontaneous trip or a
                    planned journey, QuickBusBook ensures a smooth and stress-free experience from start to finish.
                    Travel with confidence and convenience with QuickBusBook today!"</p>
            </div>
        </div>
        <!-- <div class="footer1"></div> -->
        <div class="footer1">
            <a href="">
                <p class="YT"><i class="ri-youtube-line"></i></p>
            </a>
            <a href="">
                <p class="INSTA"> <i class="ri-instagram-line"></i></p>
            </a>
            <a href="">
                <p class="X"><i class="ri-twitter-x-line"></i></p>
            </a>
            <a href="">
                <p class="FACE"><i class="ri-facebook-box-line"></i></p>
            </a>
        </div>
    </footer>



    <script>
        // Get all .main4box elements
        var boxes = document.querySelectorAll(".main4box");

        // Loop through each box and assign a random width
        boxes.forEach(function (box) {
            var randomWidth = Math.floor(Math.random() * (50 - 10 + 1)) + 10; // Random width between 10% and 50%
            box.style.width = randomWidth + "%"; // Set the width
        });
    </script>

</body>

</html>