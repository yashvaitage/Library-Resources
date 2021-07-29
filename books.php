<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    echo "<script>
    alert('Please login first!');
    window.location.href='index.php'; 
    </script>";
}else{
?>
<head>
    <title>Books</title>
</head>


    <?php include './lrheader.php'; ?>
    <div>
        <div class="jumbotron jumbotron-fluid mt-55 mb-0">
            <div class="container">
                <section class="row">
                    <!-- computer card -->
                    <div class="col order-first">
                        <div class="card" style="width: 18rem;  padding:10px;">
                        <div class="image-part">
                            <img src="assets/img/computer.jpg" height="320px" width="100%" class="card-img-top" alt="image">
                        </div>
                            <div class="card-body">
                                <h5 class="card-title">Computer Books</h5>
                                <a href="computer.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <!-- management card -->
                    <div class="col">
                        <div class="card" style="width: 18rem; padding:10px;">
                            <img src="assets/img/management.jpg" height="320px" width="100%" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">Management Books</h5>
                                <a href="management.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <!-- magazine card -->

                    <div class="col order-last">
                        <div class="card" style="width: 18rem; padding:10px;">
                            <img src="assets/img/magazine.jpg" height="320px" width="100%" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">Magazine</h5>
                                <a href="magazine.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <br>
                <section class="row">
                 <!-- Journal card -->
                 <div class="col order-first col-md-4">
                        <div class="card" style="width: 18rem;  padding:10px;">
                            <img src="assets/img/Journal.jpg" height="320px" width="100%" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">Journal</h5>
                                <a href="journal.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <!-- Thesis card -->
                    <div class="col order col-md-4">
                        <div class="card" style="width: 18rem;  padding:10px;">
                            <img src="assets/img/Thesis.jpg" height="320px" width="100%" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">Thesis</h5>
                                <a href="thesis.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php include("footer.php"); ?>
