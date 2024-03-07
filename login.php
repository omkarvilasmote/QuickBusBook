<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login !</title>

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
        if(basename($_SERVER['PHP_SELF']) !== 'login.php') {
            header("Location: login.php");
            exit();
        }
    }
?>    


    <div class="main">
        <div class="mainone">
            <div class="logo"></div>
            <div class="mainform">
                <form action="login_act.php" method="post">
                    <h1><span><i class="ri-login-box-line"></i></span>Login</h1>
                    <br>
                    <label for="email"><i class="ri-mail-send-line"></i> Email</label><br>
                    <input type="email" name="email" id="" required><br>
                    <br>

                    <label for="password"><i class="ri-lock-password-line"></i> Password</label><br>
                    <input type="password" name="password" id="" required><br>
                    <br>
                    <button type="submit">Login</button>
                    <br>
                    <br>
                    <a href="signup.php">I dont have account</a>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>