

<?php
$cook = $_COOKIE['ADMIN'];
// echo $emailV;
if(!$cook){
    header("Location: login.php");
}

include("DB.php");

$FromBus = $_POST['FromBus'];
$ToBus = $_POST['ToBus'];
$Date = $_POST['Date'];
$BusName = $_POST['BusName'];
$Departure = $_POST['Departure'];

$Duration = $_POST['Duration'];
$Arrival = $_POST['Arrival'];
$Fare = $_POST['Fare'];
$Seats = '40';
$BusNo = $_POST['BusNo'];

$boarding1 = $_POST['boarding1'];
$boarding2 = $_POST['boarding2'];
$boarding3 = $_POST['boarding3'];
$boarding4 = $_POST['boarding4'];
$boarding5 = $_POST['boarding5'];

$dropping1 = $_POST['dropping1'];
$dropping2 = $_POST['dropping2'];
$dropping3 = $_POST['dropping3'];
$dropping4 = $_POST['dropping4'];
$dropping5 = $_POST['dropping5'];

$query = "INSERT INTO buses (FromBus, ToBus, Date, BusName, Departure, Duration, Arrival, Fare, Seats, BusNo, boarding1, boarding2, boarding3, boarding4, boarding5, dropping1, dropping2, dropping3, dropping4, dropping5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$query2 = "INSERT INTO oldbuses (FromBus, ToBus, Date, BusName, Departure, Duration, Arrival, Fare, Seats, BusNo, boarding1, boarding2, boarding3, boarding4, boarding5, dropping1, dropping2, dropping3, dropping4, dropping5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare statement for query1
$stmt = mysqli_prepare($conn, $query);
if (!$stmt) {
    echo "Error in preparing statement for query1: " . mysqli_error($conn);
    exit();
}

// Prepare statement for query2
$stmt2 = mysqli_prepare($conn, $query2);
if (!$stmt2) {
    echo "Error in preparing statement for query2: " . mysqli_error($conn);
    exit();
}

// Bind parameters and execute query1
mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $FromBus, $ToBus, $Date, $BusName, $Departure, $Duration, $Arrival, $Fare, $Seats, $BusNo, $boarding1, $boarding2, $boarding3, $boarding4, $boarding5, $dropping1, $dropping2, $dropping3, $dropping4, $dropping5);
$success1 = mysqli_stmt_execute($stmt);

// Bind parameters and execute query2
mysqli_stmt_bind_param($stmt2, "ssssssssssssssssssss", $FromBus, $ToBus, $Date, $BusName, $Departure, $Duration, $Arrival, $Fare, $Seats, $BusNo, $boarding1, $boarding2, $boarding3, $boarding4, $boarding5, $dropping1, $dropping2, $dropping3, $dropping4, $dropping5);
$success2 = mysqli_stmt_execute($stmt2);

// Check if both queries executed successfully
if ($success1 && $success2) {
    // echo "Both queries executed successfully.";
    $createTableQuery = "CREATE TABLE $BusNo (
        Id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255),
        availability VARCHAR(255) DEFAULT 'Available'
    )";
    $result = mysqli_query($conn, $createTableQuery);
    if ($result) {

       header("Location: success2.php?Message=Table .$BusNo created successfully.");
        // Populate the new table with values from 1 to 40
        for ($i = 0; $i <= 40; $i++) {
            $insertValueQuery = "INSERT INTO $BusNo (email) VALUES ('')";
            $insertResult = mysqli_query($conn, $insertValueQuery);
            if (!$insertResult) {
                echo "Error inserting value $i into table $BusNo: " . mysqli_error($conn);
            }
        }
        
    } else {
        echo "Error creating table $tableName: " . mysqli_error($conn);
    }

} else {
    echo "Error in executing one or both queries.";
}

// Close statements
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt2);

// Close connection
mysqli_close($conn);


?>