<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-social/bootstrap-social.css">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Login</title>
</head>

<body>
    <div class="body">
        <div class="login">
            <h2 class="text-center">Admin Login</h2>
            <div class="container">

                <!-- database insert data & match with signup data -->
                <?php
                include("config.php");
                if (isset($_POST['login'])) {
                    $error = 0;
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $query = mysqli_query($con, "INSERT INTO `adminlogin`(`email`, `password`) VALUES ('$email','$password')");
                    $query = mysqli_query($con, "SELECT * FROM `adminsignup` WHERE `email` = '$email' AND `password` = '$password'");
                    $count = mysqli_num_rows($query);
                    $row = mysqli_fetch_array($query);

                    if ($row['status'] == "suspend") {
                        $error = 1;
                        echo "<script>
                            alert('Your account has been suspended');
                            </script>";
                    }
                    // if (($count > 0) && ($error == 0)) {
                    //     echo "Login Successful";
                    // } else {
                    //     echo "Login Failed";
                    // }

                    // error_reporting(0);
                    if (($count > 0) && ($error == 0)) {
                        session_start();
                        //$_SESSION = $email;
                        $_SESSION['login_admin'] = $email;
                        echo "<script>alert('Login Successful');
                window.location.href='index.php';</script>";
                    } else {
                        echo "<script>alert('Login Failed');
                window.location.href='adminlogin.php';</script>";
                    }
                }
                
              
                ?>
                <form action="" method="POST">
                    <div class=login-text>
                        <input type="email" name="email" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Admin Email" required>
                    </div>
                    <div class=login-text>
                        <input type="password" name="password" value="" class="text-light" onkeyup="this.setAttribute('value', this.value);" placeholder="Password" required>
                    </div>
                    <div class="text-center send-button">
                        <input type="submit" class="btn btn-secondary m-2" name="login" value="login"><br>
                        <a href="forget.php" class="text-light">Forget Password ? </a>
                    </div>
                </form>
            </div>
        </div>
        <div style=float:right>
            <li class="nav-item mr-2 list-unstyled">
                <a class="nav-link btn btn-outline-light btn-lg text-light" href="adminsignup.php">Admin Sign-Up</a><br>
                <a class="nav-link btn btn-outline-light btn-lg text-light" href="../login.php">User Login</a>
            </li>
        </div>

    </div>
</body>

</html>
