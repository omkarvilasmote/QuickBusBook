<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="adminuser">
    <center>
        <table>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>delete</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <?php
                    $cook = $_COOKIE['ADMIN'];
                    // echo $emailV;
                    if(!$cook){
                        header("Location: login.php");
                    }

                    include("DB.php");
                    $query = 'SELECT * FROM login';
                    $result = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){
                        $role = $row['role'];
                        if($role == 'member'){
                            $Name = $row['Name'];
                            $Email = $row['email'];
                            $Password = $row['Password'];
                            echo "<th>$Name</th>";
                            echo "<th>$Email</th>";
                            echo "<th>$Password</th>";
                            echo "<th><button><a href='admin_act.php?email=$Email'>Delete</a></button></th>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    
                    
                    
            </tbody>
        </table>
    </center>
</div>
</body>
</html>