<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create bus !</title>
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
<?php
$cook = $_COOKIE['ADMIN'];
// echo $emailV;
if(!$cook){
    header("Location: login.php");
}
?>
        <div class="mainadminpage">
            <form action="admin_CreateBus_act.php" method="POST">
                <div class="adminmainleft">
                   <center>
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="FromBus" id="FromBus" placeholder="FromBus" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="ToBus" id="ToBus" placeholder="ToBus" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="date" name="Date" id="Date" placeholder="Date" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="BusName" id="BusName" placeholder="BusName" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="Departure" id="Departure" placeholder="Departure" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="Duration" id="Duration" placeholder="Duration" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="Arrival" id="Arrival" placeholder="Arrival" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="Fare" id="Fare" placeholder="Payment" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="BusNo" id="BusNo" placeholder="BusNo" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <!-- <input type="text" name="FromBus" id="FromBus"><br> -->
    
                   </center>
                
                </div>

                <div class="mainadminright">
                    <center>
                        <label for="FromBus">boarding</label><br>
                        <input type="text" name="boarding1" id="boarding1" placeholder="boarding1" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="boarding2" id="boarding2" placeholder="boarding2" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="boarding3" id="boarding3" placeholder="boarding3"><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="boarding4" id="boarding4" placeholder="boarding4"><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="boarding5" id="boarding5" placeholder="boarding5"><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <label for="FromBus">dropping</label><br>
                    <input type="text" name="dropping1" id="dropping1" placeholder="dropping1" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="dropping2" id="dropping2" placeholder="dropping2" required><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="dropping3" id="dropping3" placeholder="dropping3"><br>
    
                    <!-- <label for="FromBus">FromBus</label><br> -->
                    <input type="text" name="dropping4" id="dropping4" placeholder="dropping4"><br>
                    <input type="text" name="dropping5" id="dropping5" placeholder="dropping5"><br>

                    </center>
                    
                </div>
                <div class="mainadminbutton">
                    <button>Submit</button>
                </div>
            </form>

        </div>
        <br>
        <br>
        <br>

</body>
</html>
        