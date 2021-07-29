<head>
    <title>Profile</title>
</head>
<?php include './lrheader.php'; ?>

<div class="profile md-55">
    <h1><i class="fa fa-user pt-3" aria-hidden="true"></i> My Profile</h1>

    <?php
    include("config.php");
if(isset($_SESSION['login_user'])){
    
    $query = mysqli_query($con, "SELECT * from `signup` where `prnno`='$_SESSION[login_user]'");
    if ($query) {

        echo "<div class='left-column'>
        <h4>Name :</h4><br>
        <h4>PRN Number   :</h4><br>
        <h4>Course       :</h4><br>
        <h4>Mobile Number:</h4><br>
        <h4>Email Address:</h4><br>
        </div class='clear'>";


        while ($row = mysqli_fetch_assoc($query)) {
            echo "<div class='right-column'>";
            echo "<h4>";
            echo $row['name'];
            echo "</h4><br>";
            echo "<h4>";
            echo $row['prnno'];
            echo "</h4><br>";
            echo "<h4>";
            echo $row['course'];
            echo "</h4><br>";
            echo "<h4>";
            echo  $row['phone'];
            echo "</h4><br>";
            echo "<h4>";
            echo $row['email'];
            echo "</h4><br>";
        }
        echo "</div>";
    }
}
  
    ?>
</div>

<?php include("footer.php"); ?>