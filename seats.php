<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheats !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="/css/home.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/seat.css">

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
                    if(!$emailV){
                        header("Location: login.php");
                    }
                    // echo $emailV;
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


    <div class="mainbusselect">
        <div class="mainbusselect1">

        </div>

        <div class="maintablebus">
            <div class="mainoneBUS">
            <div class="fosteering">
            <i class="ri-steering-2-line"></i>
            </div>
        <table>
<tbody>
<form action="bookbus.php" method="get">

<?php


include("DB.php");

$BusNo = $_GET['BusNo'] ?? '';

$query = "SELECT Id, availability FROM $BusNo WHERE Id BETWEEN 1 AND 20";
$query2 = "SELECT Id, availability FROM $BusNo WHERE Id BETWEEN 21 AND 40";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn,$query2);




$html = '<table>';
$html .= '<tbody>';
$html .= '<tr>';

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['Id'];
    $availability = $row['availability'];
    

    $html .= '<td>';
    if ($availability == 'booked') {
        $html .= $availability;
    } else {
        $html .= '<input type="checkbox" value="' . $id . '" name="checkboxes[]"></br>'.$id.'</br>';
        $html .= '<i class="ri-sofa-line"></i>';
    }
    
    $html .= '</td>';
    
    
    if ($id % 10 == 0) {
        $html .= '</tr><tr>';
    }
    
}


$html .= '</tr>';
$html .= '</tbody>';
$html .= '</table>';
$html .= '</br>';

echo $html;

?>

<?php

$html = '<table>';
$html .= '<tbody>';
$html .= '<tr>';

while ($row = mysqli_fetch_assoc($result2)) {
    $id = $row['Id'];
    $availability = $row['availability'];
    

    $html .= '<td>';
    if ($availability == 'booked') {
        $html .= '<input type="checkbox" value="' . $id . '" name="checkboxes[]" disabled class="Booked">'.$availability.'</br>';
    } else {
        $html .= '<input type="checkbox" value="' . $id . '" name="checkboxes[]"></br>'.$id.'</br>';
        $html .= '<i class="ri-sofa-line"></i>';
    }
   
    $html .= '</td>';
    
    
    if ($id % 10 == 0) {
        $html .= '</tr><tr>';
    }
    
}


$html .= '</tr>';
$html .= '</tbody>';
$html .= '</table>';

echo $html;

?>
                </tbody>
            </table>            
            </div>
        </div>
    
        
        
        <div class="mainoneselectseatdiv">
            <div class="mainonedivselection">
            <?php
            $conn = mysqli_connect("localhost","root","","bus");
            if(!$conn){
                exit("Unable to connect!");
            }

$querry5 = "SELECT * FROM buses WHERE BusNo='$BusNo'";
$result5 = mysqli_query($conn, $querry5);
while ($row5 = mysqli_fetch_assoc($result5)) {
    $boarding = array(
        $row5['boarding1'],
        $row5['boarding2'],
        $row5['boarding3'],
        $row5['boarding4'],
        $row5['boarding5']
    );

    $dropping = array(
        $row5['dropping1'],
        $row5['dropping2'],
        $row5['dropping3'],
        $row5['dropping4'],
        $row5['dropping5']
    );
}
?>

<center>
    <table>
        <thead>
            <th>Boarding</th>
            <th>Dropping</th>
        </thead>

        <tbody>
            <?php for ($i = 0; $i < count($boarding); $i++) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="Boarding[]" id="boarding<?php echo $i ?>" value="<?php echo $boarding[$i] ?>">
                        <label for="boarding<?php echo $i ?>"><?php echo $boarding[$i] ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="Dropping[]" id="dropping<?php echo $i ?>" value="<?php echo $dropping[$i] ?>">
                        <label for="dropping<?php echo $i ?>"><?php echo $dropping[$i] ?></label>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</center>

                    
                <div class="divforbtnmaindiv">
                <input type="hidden" name="BusNo" value="<?php echo ($BusNo); ?>">
                    <a><Button>Book Now</Button></a>
                    <!-- <button>Book Now</button> -->
                </div>
            
                <br>
                <br>
            </div>
            <br>
            <br>
        </div>
    </div>
    
   </form>
</body>

</html>