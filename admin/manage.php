<head>
    <title> Manage Students</title>
</head>


<?php include './header.php';
include("config.php"); ?>


<h4 class="text mt-55" style="padding-top:20px">Manage Students</h4>

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
error_reporting(0);
$type = $_GET['type'];
if (isset($_POST['submit'])) {
    $query = mysqli_query($con, "SELECT * from `signup` where `name` like '%$_POST[search]%' ");
    if (mysqli_num_rows($query) == 0) {
        echo "Sorry! No student found, try searching again.";
    } else {
        echo "
        <table class='table table-bordered table-hover' >;
        <tr style='background-color: #25C096;'>
        <th>Name</th>
        <th>PRN Number</th>
        <th>Course</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        </tr>";


        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['status'] == "active") {
                echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['prnno'] . "</td>
            <td>" . $row['course'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td><a href = 'manage.php?type=suspendUser&id=" . $row['id'] . "&user=suspend'><button class='btn btn-danger'><i class='fa fa-lock fa-lg'></i> Click to Suspend </button></a></td>
        </tr>";
            } else {
                echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['prnno'] . "</td>
                <td>" . $row['course'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
            <td><a href = 'manage.php?type=suspendUser&id=" . $row['id'] . "'><button class='btn btn-success'><i class='fa fa-check fa-lg'></i> Click to Active </button></a></td>
        </tr>";
            }
        }
        echo "</table>";
    }
} else {

    $query = mysqli_query($con, "SELECT * FROM `signup`;");

    echo "
    <table class='table table-bordered table-hover' >;
    <tr style='background-color: #25C096;'>
    <th>Name</th>
    <th>PRN Number</th>
    <th>Course</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Status</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['status'] == "active") {
            echo "<tr>
        <td>" . $row['name'] . "</td>
        <td>" . $row['prnno'] . "</td>
        <td>" . $row['course'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['phone'] . "</td>
        <td><a href = 'manage.php?type=suspendUser&id=" . $row['id'] . "&user=suspend'><button class='btn btn-danger'><i class='fa fa-lock fa-lg'></i> Click to Suspend </button></a></td>
    </tr>";
        } else {
            echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['prnno'] . "</td>
            <td>" . $row['course'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
        <td><a href = 'manage.php?type=suspendUser&id=" . $row['id'] . "'><button class='btn btn-success'><i class='fa fa-check fa-lg'></i> Click to Active </button></a></td>
    </tr>";
        }
    }
    echo "</table>";
}

$id = $_GET['id'];
$user = $_GET['user'];
if ($type == "suspendUser") {

    if ($user == "suspend") {
        $query = mysqli_query($con, "UPDATE `signup` SET `status` = 'suspend' WHERE `id` = '$id'");
        if ($query) {
            echo "<script>alert('Suspended');
             window.location.href='manage.php';
             </script>";
        } else {
            echo "<script>alert('Something wents wrong !');
            window.location.href='manage.php';
            </script>";
        }
    } else {
        $query = mysqli_query($con, "UPDATE `signup` SET `status` = 'active' WHERE `id` = '$id'");
        if ($query) {
            echo "<script>alert('Activated');
         window.location.href='manage.php';
         </script>";
        } else {
            echo "<script>alert('Something wents wrong !');
        window.location.href='manage.php';
        </script>";
        }
    }
}


include("footer.php"); ?>