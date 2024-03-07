<?php

    $name = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    if($password != $rpassword){
        echo "password was wrong";
    }
    include("DB.php");
    
    $query = "INSERT INTO login (Name,email,Password) VALUES ('$name','$email','$password')";
    mysqli_query($conn,$query)OR Die("Error".mysqli_error($conn));
    header("Location: login.php");
    exit();

    mysqli_close($conn);
    // require_once "DB.php"
    
    ?>