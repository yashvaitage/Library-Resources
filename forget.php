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
    <title>Forget Password</title>
</head>

<body>
    <div class="forget">
        <div class="login">
            <h2 class="text-center">Forget Password</h2>
            <div class="container">
             <!-- upadte database connection -->
             <?php
                include("config.php");
                if (isset($_POST['confirm'])) {
                    $id = $_POST['id'];
                    $email = $_POST['email'];
                    $pass = md5($_POST['pass']);
                    $query = mysqli_query($con, "UPDATE `signup` SET `email`='$email' AND `pass`='$pass' WHERE `id`='$id'");
                  //  error_reporting(0);
                    if($query){
                        echo "<script>alert('Update Successful');
                window.location.href='login.php';</script>";
                    } else {
                        echo "<script>alert('Failed');
                window.location.href='forget.php';</script>";
                    }
                }
                ?>
                <form action="" method="POST">
                    <div class=login-text>
                        <input type="email" name="email" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Enter Email" required>
                    </div>
                    <div class=login-text>
                        <input type="password" name="pass" value="" class="text-light" onkeyup="this.setAttribute('value', this.value);" placeholder="New Password" required>
                    </div>
                    <div class=login-text>
                        <input type="password" name="pass" value="" class="text-light" onkeyup="this.setAttribute('value', this.value);" placeholder="Conform Password" required>
                    </div>
                    <div class=login-text>
                        <input type="text" name="id" class="text-light" value="<?php echo $id; ?>" >
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-secondary m-2" name="confirm" value="Confirm"><br>
                    </div>
                </form>
            </div>
        </div>
        <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->
        <div style=float:right>
            <li class="nav-item mr-2 list-unstyled">
                <a class="nav-link btn btn-outline-light btn-lg text-light" href="login.php">Login</a>
            </li>
        </div>
    </div>
</body>

</html>