<head>
  <title>Edit Profile</title>
</head>
<?php include './lrheader.php'; ?>


<?php
include("config.php");
if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $prnno = $_POST['prnno'];
  $course = $_POST['course'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $query = mysqli_query($con, "UPDATE `signup` SET `name`='$name',`prnno`='$prnno',`course`='$course',`email`='$email',`phone`='$phone' WHERE `prnno`='$_SESSION[login_user]' ");
  if ($query) {
    echo "<script>alert('Your Profile Updation Successful');
                      window.location.href='editprofile.php';</script>";
  } else {
    echo "<script>alert('Your Updation Failed ! Try Again..');
                      window.location.href='editprofile.php';</script>";
  }
}
?>

<div class="profile-background">
  <form method="POST" class="profile-box mt-55">
    <h2 class="editprofile"><i class="fa fa-pencil" aria-hidden="true"></i> Edit My Profile</h2>


    <?php
    $query = mysqli_query($con, "SELECT * from `signup` where `prnno`='$_SESSION[login_user]' ");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
      <label>
        <p class="label-txt">EDIT YOUR NAME</p>
        <?php
        echo '<input type="text" class="input" name="name" value="' . $row['name'] . '"><br/>';
        ?>
        <div class="line-box">
        </div>
      </label>


      <label>
        <p class="label-txt">EDIT YOUR PRN NUMBER</p>
        <?php
        echo '<input type="text" class="input" name="prnno" value=' . $row['prnno'] . '><br/>';
        ?>
        <div class="line-box">
        </div>
      </label>

      <label>
        <p class="label-txt">EDIT YOUR COURSE </p>
        <?php
        echo '<input type="text" class="input" name="course" value=' . $row['course'] . '><br/>';
        ?>
        <div class="line-box">
        </div>
      </label>

      <label>
        <p class="label-txt">EDIT YOUR MOBILE NUMBER</p>
        <?php
        echo '<input type="text" class="input" name="phone" value=' . $row['phone'] . '><br/>';
        ?>
        <div class="line-box">
        </div>
      </label>

      <label>
        <p class="label-txt">EDIT YOUR EMAIL ADDRESS</p>
      <?php
      echo '<input type="text" class="input" name="email" value=' . $row['email'] . '><br/>';
    }
      ?>
      <div class="line-box">
      </div>
      </label>

      <button type="submit" name="save">Save Changes</button>
  </form>
</div>
<?php include("footer.php"); ?>