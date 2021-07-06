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
    <title>Sign-Up</title>
</head>

<body>
    <div class="body">
        <div class="signup">
            <h2 class="text-center">Sign-Up</h2>
            <div class="container">
                <!-- database connection -->

                <?php
                include("config.php");
                if (isset($_POST['register'])) {
                    $name = $_POST['name'];
                    $prnno = $_POST['prnno'];
                    $course = $_POST['course'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $pass = md5($_POST['pass']);
                    $error = 0;

                    $qu= mysqli_query($con,"SELECT * FROM `signup` WHERE `prnno` = '$prnno'");
                    if(mysqli_num_rows($qu)>0){
                        $error = 1;
                        echo "<div class='text-danger'>PRN Number Already Exists</div>";
                    }


                   
                    if ($error==0) {
                        $query = mysqli_query($con, "INSERT INTO `signup`( `name`, `prnno`,`course`, `email`, `phone`, `pass`,`status`) VALUES ('$name','$prnno','$course','$email','$phone','$pass','activate')");
                        echo "<div class='text-success'> Register Successful </div>";
                    } else {
                        echo "<div class='text-danger'> Registration Failed </div>";
                    }
                }
                ?>

                <form action="" method="POST">
                    <div class="login-text">
                        <input type="name" name="name" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Enter Name" required>
                        <input type="name" name="prnno" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="PRN Number" required>
                        <!-- <input type="name" name="course" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Course" required> -->
                        <!-- <select name="course" class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose Course</option>
                            <option>MCA</option>
                            <option>BCA</option>
                            <option>MBA</option>
                            <option>BBA</option>
                        </select><br><br> -->
                        <input type="email"  name="email" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Email" required>
                        <input type="name" name="phone" class="text-light" onkeyup="this.setAttribute('value', this.value);" value="" placeholder="Phone Number" required>
                    </div>
                    <div class="login-text">
                        <input type="password" name="pass" value="" class="text-light" onkeyup="this.setAttribute('value', this.value);" placeholder="Password" required>
                    </div>
                    <select name="course" id="Category">
                    <option selected disabled value="">Choose Course</option>
                        <option value="MCA">MCA</option>
                        <option value="BCA">BCA</option>
                        <option value="MBA">MBA</option>
                        <option value="BBA">BBA</option>
                    </select>
                    <div class="send-button">
                    <input type="submit" value="Register" class="btn btn-secondary float-right" name="register">
                    </div></form>
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