<?php
$cook = $_COOKIE['ADMIN'];
// echo $emailV;
if(!$cook){
    header("Location: login.php");
}

$BusNo = $_GET['BusNo'];

include("DB.php");

$query = "DELETE FROM buses WHERE BusNo='$BusNo'";
$query2 = "DROP TABLE $BusNo";

mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));
mysqli_query($conn, $query2) or die("Error: " . mysqli_error($conn));

if ($conn) {
    header("Location: success2.php?Message='Bus deleted successfully.'");
} else {
    header("Location: admin_failure.php?Message='Something went wrong'");
}




?>