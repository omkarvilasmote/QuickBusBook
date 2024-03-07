<?php

include("DB.php");

$cook = $_COOKIE['AUTH'];
if(!$cook){
    header("Location:login.php");
}
$PhoneNum = $_POST['PhoneNum'];
$seatNo = $_POST['seatNo'];
echo $seatNo;
$seatNoArray = explode(',', $seatNo);
$BusNO = $_POST['BusNO'];
$BPoint = $_POST['BPoint'];
$STDrop=$_POST['STDrop'];
$Amount = $_POST['Amount'];
$PaymentID = $_POST['PaymentID'];
$Departure = $_POST['Departure'];


$query = "INSERT INTO purchases (email, PhoneNum, seatNo, BusNO, BPoint, STDrop, Amount, PaymentID, boardingtime) VALUES ('$cook', '$PhoneNum', '$seatNo', '$BusNO', '$BPoint', '$STDrop', '$Amount', '$PaymentID', $Departure)";
$result1 = mysqli_query($conn, $query);

if ($result1) {
    // First query executed successfully, proceed with the update query
    $Querry = "UPDATE $BusNO SET availability='booked', email='$cook' WHERE Id IN ('" . implode("','", $seatNoArray) . "')";

    $result2 = mysqli_query($conn, $Querry);

    if ($result2) {
        header("Location: success.php?Message='You purchased successpully You can see your ticket in you history section.'");
    } else {
        echo "Error updating records: " . mysqli_error($conn);
    }
} else {
    echo "Error inserting records: " . mysqli_error($conn);
}



?>