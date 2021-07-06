<head>
    <title> Student Messages</title>
</head>


<?php include './header.php';
include("config.php"); ?>
<!-- search bar -->
<h4 class="text mt-55" style="padding-top:20px">Student Messages</h4>

<form method="POST">
    <div class="input-group srch float-right">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" name="search" placeholder="Search Student.." />

        </div>
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>



<div class="clear">
</div>
<?php

if (isset($_POST['submit'])) {
    $query = mysqli_query($con, "SELECT * from contact where sname like '%$_POST[search]%' ");
    if (mysqli_num_rows($query) == 0) {
        echo "Sorry! No student found, try searching again.";
    } else {
        echo "
        <table class='table table-bordered table-hover' >;
        <tr style='background-color: #25C096;'>
        <th>Student Name</th>
        <th>Email</th>
        <th>Contact No.</th>
        <th>Message</th>
        <th>Date/Time</th>
        <th>Delete</th>
        </tr>";


        while ($row = mysqli_fetch_assoc($query)) {;
            echo "
        <tr>
            <td>" . $row['sname'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phoneno'] . "</td>
            <td>" . $row['message'] . "</td>
            <td>" . $row['updated'] . "</td>
            <td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-trash fa-lg'></i></a></td>
        </tr>
        ";
        }
        echo "</table>";
        
    }
} else {

    $query = mysqli_query($con, "SELECT * FROM `contact`;");

    echo "
    <table class='table table-bordered table-hover' >;
    <tr style='background-color: #25C096;'>
    <th>Student Name</th>
    <th>Email</th>
    <th>Contact No.</th>
    <th>Message</th>
    <th>Date/Time</th>
    <th>Delete</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
            <td>" . $row['sname'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phoneno'] . "</td>
            <td>" . $row['message'] . "</td>
            <td>" . $row['updated'] . "</td>
            <td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-trash fa-lg'></i></a></td>
        </tr>
        ";
    }
    echo "</table>";
}

include("footer.php"); ?>