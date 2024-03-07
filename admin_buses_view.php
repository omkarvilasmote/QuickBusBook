<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus view !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/seat.css">
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

<?php
$cook = $_COOKIE['ADMIN'];
// echo $emailV;
if(!$cook){
    header("Location: login.php");
}

include("DB.php");

$BusNo = $_GET['BusNo'] ?? '';

$query = "SELECT Id, availability, email FROM $BusNo WHERE Id BETWEEN 1 AND 20";
$query2 = "SELECT Id, availability, email FROM $BusNo WHERE Id BETWEEN 21 AND 40";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn,$query2);




$html = '<table>';
$html .= '<tbody>';
$html .= '<tr>';

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['Id'];
    $email = $row['email'];
    $availability = $row['availability'];
    

    $html .= '<td>';
    if ($availability == 'booked') {
        $html .= $availability."</br>".$email;
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
    
    
</body>

</html>