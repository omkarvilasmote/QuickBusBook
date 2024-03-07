<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup !</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
    if(isset($_COOKIE['AUTH'])){
        if(basename($_SERVER['PHP_SELF']) !== 'index.php') {
            header("Location: index.php");
            exit();
        }
    }else{
        if(basename($_SERVER['PHP_SELF']) !== 'signup.php') {
            header("Location: signup.php");
            exit();
        }
    }
?>   
    <div class="main">
        <div class="mainone">
            <div class="logo"></div>
            <div class="mainform">
                <form action="signup_act.php" method="post">
                    <h1><span><i class="ri-login-box-fill"></i></span>SignUp</h1>
                    <br>
                    <label for="Name"><span><i class="ri-user-line"></i></span> Name</label><br>
                <input type="text" name="Name" id=""><br>
                <br>
                    <label for="email"><i class="ri-mail-send-line"></i> Email</label><br>
                    <input type="email" name="email" id="" required><br>
                    <br>

                    <label for="password"><i class="ri-lock-password-line"></i> Password</label><br>
                    <input type="password" name="password" id="" required placeholder="Minimum 8 charactor" minlength="8"><br>
                    <br>
                    <label for="rpassword"><i class="ri-lock-password-line"></i> Confirm Password</label><br>
                    <input type="password" name="rpassword" id="" required><br>
                    <br>
                    <button type="submit">Create account</button>
                    <br>
                    <br>
                    <a href="login.php">I have alredy account</a>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>