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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/js/style.js">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="assets/img/logo.png">
    <title>Library Resources</title>
</head>
<body>
<?php 
    session_start();
    if (!isset($_SESSION['login_user'])) {
        header('index.php');
    }
?>
    <!-- navbar starts -->
    <div>
        <nav class="navbar-expand-lg navbar-dark header fixed-top">
            <div class="navContent">

                <!-- Navbar content -->
                <a class="navbar-brand" href="main.php"><img src="assets/img/logo.png" class="rounded-circle" alt="Logo" title="This is logo" width="40" height="40"> <b class="title">Library Management System</b> </a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link" href="main.php">
                            <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="books.php">
                            <i class="fa fa-book" aria-hidden="true"></i> All Books</a>
                    </li>
                    <li><a class="nav-link" href="aboutus.php">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> About Us </a>
                    </li>
                    <li><a class="nav-link" href="contactus.php">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i> Contact Us</a>
                    </li>
                

                    <!-- Example single danger button -->
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn header-button  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                            
                            <?php if (isset($_SESSION['login_user'])) {
                                  echo '<a class="dropdown-item" selected disabled value="">PRN : '. $_SESSION["login_user"] .'</a>';
                                } ?>
                                <a class="dropdown-item" href="profile.php">My Profile</a>
                                <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                                <div class="dropdown-divider"></div>
                                <?php 
                                if (isset($_SESSION['login_user'])) {
                                    echo '<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a>';
                                }else{
                                    echo '<a class="dropdown-item" href="login.php"><i class="fa fa-sign-in fa-lg"></i> Login</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
