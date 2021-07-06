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
    <link rel="icon" href="assets/img/logo.png">
    <title>Sign-Up</title>
</head>

<body>
    <div class="body">
        <div class="signup">
            <h2 class="text-center">Admin Sign-Up</h2>
            <div class="container">
                <!-- database connection -->

                <?php
                include("config.php");
                if (isset($_POST['register'])) {
                    $name = $_POST['name'];
                    $work = $_POST['work'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = md5($_POST['password']);
                    $error = 0;

                    $qu= mysqli_query($con,"SELECT * FROM `adminsignup` WHERE `email` = '$email'");
                    if(mysqli_num_rows($qu)>0){
                        $error = 1;
                        echo "<div class='text-danger'>Email-ID Already Exists</div>";
                    }


                   
                    if ($error==0) {
                        $query = mysqli_query($con, "INSERT INTO `adminsignup`( `name`,`work`, `phone`, `email`, `password`,`status`) VALUES ('$name','$work','$phone','$email','$password','active')");
                        echo "<div class='text-success'> Admin Registered Successfully </div>";
                    } else {
                        echo "<div class='text-danger'> Registeration Failed </div>";
                    }
                }
                ?>

                <form action="" method="POST">
                    <div class="login-text">
                        <input type="name" name="name" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Enter Name" required>
                        <select name="work" id="Category">
                            <option selected disabled value="">Choose..</option>
                            <option value="Librarian">Librarian</option>
                            <option value="Jr. Asst. Librarian">Jr. Asst. Librarian</option>
                            <option value="Sr. Asst. Librarian">Sr. Asst. Librarian</option>
                        </select><br>
                        <input type="name" name="phone" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Phone Number" required>
                        <input type="email" name="email" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Email" required>
                    </div>
                    <div class="login-text">
                        <input type="password" name="password" value="" class="text-light" onkeyup="this.setAttribute('value', this.value);" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>

                    <div class="send-button">
                        <input type="submit" value="Register" class="btn btn-secondary float-right" name="register">
                    </div>
                </form>
            </div>

        </div>
        <div style=float:right>
            <li class="nav-item mr-2 list-unstyled">
                <a class="nav-link btn btn-outline-light btn-lg text-light" href="adminlogin.php">Admin Login</a>
            </li>
        </div>
    </div>
</body>

</html>