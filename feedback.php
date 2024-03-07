<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="/css/home.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="/css/seat.css"> -->
    <link rel="stylesheet" href="css/feedback.css">
<style>
    textarea{
        padding: 8px;
    font-size: 20px;
    width: 300px;
    color: #fa5246;
    outline: none;
    }

    
form button:hover{
    box-shadow: 0 1px 4px #00332c;

}

</style>
</head>
<body>
    
    <div class="navigation">
        <nav>
            <div class="logo"></div>
            <ul>
            <li class="activ"><a href="index.php">Home</a></li>
                    <li class="activ"><a href="about.php">About</a></li>
                    <li class="activ"><a href="contactus.php">Contact</a></li>
                    <li class="activ"><a href="feedback.php">Feedback</a></li>
                    <li class="activ"><a href="history.php"> <i class="ri-history-line"></i>History</a></li>
                <?php
                    include("DB.php");

                    $emailV = $_COOKIE['AUTH'];
                    if(!$emailV){
                        header("Location: login.php");
                    }
                    // echo $emailV;
                    $query = "SELECT * FROM login WHERE email='$emailV'";
                    $result = mysqli_query($conn,$query);
                    if($result){
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['Name'];
                        echo '<li class="active"><a href="login.php"><i class="ri-login-box-line"></i>' . $name . '</a></li>';
                    }
                    ?>
            </ul>
        </nav>
    </div>


    <div class="canwereview">
        <form action="feedback_act.php" method="post">
            <h1><span><i class="ri-feedback-line"></i></span>Feedback</h1>
            <br><br>
            <label for="name"><span><i class="ri-user-line"></i></span>Name</label><br>
            <?php
            echo '<input type="text" name="name" value='.$name.' id="" readonly>'
            ?>
            <br><br>
            <label for="Email"><span><i class="ri-mail-line"></i></span>Email</label><br>
            <?php
            echo '<input type="email" name="Email" id="" value='.$emailV.' readonly>'
            ?>
            <br><br>
            <!-- <label for="Retting">Retting</label><br>
            <option value=""></option> -->
            <label for="message"><span><i class="ri-chat-1-line"></i></span>Message</label><br>
            <textarea id="message" name="about" rows="10" cols="48" required min="100" placeholder="Minimum 100 texts"></textarea><br>
            <br>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>
