<?php
$cook = $_COOKIE['ADMIN'];
// echo $emailV;
if(!$cook){
    header("Location: login.php");
}

$ID = $_GET['id'];

include("DB.php");

$query = "DELETE FROM review WHERE id='$ID'";
mysqli_query($conn, $query)OR Die("Error".mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
    // echo "DONE";
    header("Location: success2.php?Message='feedback deleted successfully.'");
}else{
    header("Location: admin_failure.php?Message='Somthing went wrong'");
}




?>