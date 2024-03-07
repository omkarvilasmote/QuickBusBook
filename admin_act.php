<?php
$cook = $_COOKIE['ADMIN'];
// echo $emailV;
if(!$cook){
    header("Location: login.php");
}

$Email = $_GET['email'];

include("DB.php");

$query = "DELETE FROM login WHERE email='$Email'";
mysqli_query($conn, $query)OR Die("Error".mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
    // echo "DONE";
    header("Location: success2.php?Message='Your user deleted successfully.$Email.'");
}else{
    header("Location: admin_failure.php?Message='Somthing went wrong'");
}




?>