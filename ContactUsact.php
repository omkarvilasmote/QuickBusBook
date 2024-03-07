<?php
include("DB.php");

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$message = $_POST['message'];

$query = "INSERT INTO contactus (email, name, message) VALUES ('$Email', '$Name', '$message')";

$result = mysqli_query($conn,$query);
if($result){
    header("Location: success.php?Message='Your contact was submited successfully wait some time we will contact you'");
}else{
    echo "Try again letter";
}

?>