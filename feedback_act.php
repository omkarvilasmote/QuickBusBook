<?php

include("DB.php");

$Name = $_POST['name'];
echo $Name;
$Email = $_POST['Email'];
echo $Email;
$about = $_POST['about'];
echo $about;

$querry = "INSERT INTO review (mail, name, about) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $querry);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $Email, $Name, $about);

    // Execute the statement
    $success = mysqli_stmt_execute($stmt);
    
    if ($success) {
        header("Location: success.php?Message=Thank%20You%20for%20your%20feedback");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close statement
mysqli_stmt_close($stmt);



?>