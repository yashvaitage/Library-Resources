<head>
    <title>Profile</title>
</head>
<?php include './header.php'; ?>

<div class="profile md-55">
    <h1><i class="fa fa-user pt-3" aria-hidden="true"></i> My Profile</h1>

    <?php
    include("config.php");

    $query = mysqli_query($con, "SELECT * from `adminsignup` where `email`='$_SESSION[login_admin]' ");
    if ($query) {

        echo "<div class='left-column'>
         <h4>Name :</h4><br>
         <h4>Email   :</h4><br>
         <h4>Mobile Number:       :</h4><br>
         <h4>Work As :</h4><br>
         <h4>Profile Updation:</h4><br>
         </div class='clear'>";


        while ($row = mysqli_fetch_assoc($query)) {
            echo "<div class='right-column'>";
            echo "<h4>";
            echo $row['name'];
            echo "</h4><br>";
            echo "<h4>";
            echo $row['email'];
            echo "</h4><br>";
            echo "<h4>";
            echo $row['phone'];
            echo "</h4><br>";
            echo "<h4>";
            echo  $row['work'];
            echo "</h4><br>";
            echo "<h4>";
            echo $row['updated'];
            echo "</h4><br>";
        }
        echo "</div>";
    }
    ?>
</div>

<?php include("footer.php"); ?>