<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap-social/bootstrap-social.css">
    <link rel="icon" href="assets/img/logo.png">
    <title>Login</title>
</head>

<body>
    <div class="body">
        <div class="login">
            <h2 class="text-center">Login To Library Resources</h2>
            <div class="container">

                <!-- database insert data & match with signup data -->
                <?php
                include("config.php");
                if (isset($_POST['login'])) {
                    $error = 0;
                    $prnno = $_POST['prnno'];
                    $password = md5($_POST['password']);
                    $query = mysqli_query($con, "INSERT INTO `userlogin`(`prnno`, `password`) VALUES ('$prnno','$password')");
                    $query = mysqli_query($con, "SELECT * FROM `signup` WHERE `prnno` = '$prnno' AND `pass` = '$password'");
                    
                    $count = mysqli_num_rows($query);
                    $row = mysqli_fetch_array($query);
                    if ($row['status'] == "suspend") {
                        $error = 1;
                        echo "<script>
                            alert('Your account has been suspended');
                            </script>";
                    }else{
                        if (($count > 0) && ($error == 0)) {
                            session_start();
                            $_SESSION['login_user'] = $prnno;
    
                            echo "<script>alert('Login Successful');
                    window.location.href='main.php';</script>";
                        } else {
                            echo "<script>alert('Login Failed');
                    window.location.href='index.php';</script>";
                        }
                    }
                    error_reporting(0);
                }
                ?>
                <form action="" method="POST">
                    <div class=login-text>
                        <input type="name" name="prnno" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="PRN Number" required>
                    </div>
                    <div class=login-text>
                        <input type="password" name="password" value="" class="text-light" onkeyup="this.setAttribute('value', this.value);" placeholder="Password"  required>
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
                <a class="nav-link btn btn-outline-light btn-lg text-light" href="signup.php">Sign-Up</a><br>
                <a class="nav-link btn btn-outline-light btn-lg text-light" href="admin/adminlogin.php">Admin Login</a>
            </li>
        </div>

    </div>
</body>

</html>