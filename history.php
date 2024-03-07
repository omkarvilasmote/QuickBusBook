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
    <link rel="stylesheet" href="css/history.css">
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
        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="mainonehistoy">
            <?php
       $emailV = $_COOKIE['AUTH'];
    //    echo  $emailV;
    $query = "SELECT * FROM purchases WHERE email=?";
    $stmt = mysqli_prepare($conn, $query);
    
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $emailV);
    
    // Execute the query
    mysqli_stmt_execute($stmt);
    
    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            echo '<div class="mainhistory">';
            echo "<table>";
            echo "<tr>";
            echo "<td>Seat No</td>";
            echo "<td>Bus No</td>";
            echo "<td>boardingtime</td>";
            echo "<td>Boarding Point</td>";
            echo "<td>Stop Point</td>";
            echo "<td>Amount</td>";
            echo "<td>PaymentID</td>";  
                
            echo "<td>Purchase Date</td>";
            echo "</tr>";
            echo "<tr>";
// echo "<th>$seatNo</th>";         
echo "<th>{$row['seatNo']}</th>";  // Assuming 'busNo' is the column name for Bus Number
echo "<th>{$row['BusNO']}</th>";  
echo "<th>{$row['boardingtime']}</th>"; 
echo "<th>{$row['BPoint']}</th>";      // Assuming 'stopPoint' is the column name for Stop Point
echo "<th>{$row['STDrop']}</th>";         // Assuming 'amount' is the column name for Amount
echo "<th>{$row['Amount']}</th>";      // Assuming 'paymentID' is the column name for Payment ID
echo "<th>{$row['PaymentID']}</th>";  
echo "<th>{$row['purchase_date']}</th>";  

echo "</tr>";
echo "</table>";
echo "</div>";
        }
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
    
        

        ?>
        
    
</div>
    

</body>
</html>