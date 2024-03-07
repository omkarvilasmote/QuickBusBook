<?php

$email = $_POST['email'];
$password = $_POST['password'];

// echo $email.$password;

include("DB.php");

$querry = "SELECT * from login WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$querry);

// echo $result;
if($row=mysqli_fetch_array($result)){
    $member = $row['role'];
    // echo $member;
    if($member=='member'){
        setcookie('AUTH',$email,time() + 3600,'login.php');

        header("Location: index.php");
    }else{
        setcookie('ADMIN',$email,time() + 3600,'admin.php');

        header("Location: admin.php");
    }
    // if

}else{
    echo "Access Dosent have";
}
mysqli_close($conn);

?>