<head>
    <title> Admin Data</title>
</head>


<?php include './header.php';
include("config.php"); ?>

<h4 class="text mt-55" style="padding-top:20px">Admin Data</h4>

<form method="POST">
    <div class="input-group srch float-right">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" name="search" placeholder="Search Admin.." />

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
    $query = mysqli_query($con, "SELECT * from `adminsignup` where `name` like '%$_POST[search]%' ");
    if (mysqli_num_rows($query) == 0) {
        echo "Sorry! No data found, try searching again.";
    } else {
        echo "
        <table class='table table-bordered table-hover' >;
        <tr style='background-color: #25C096;'>
        <th>Name</th>
        <th>Email</th>
        <th>Contact No.</th>
        <th>Work As</th>
        <th>Account Creation Date/Time</th>
        <th>Status</th>
        </tr>";


        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['status'] == "active") {
                echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>" . $row['work'] . "</td>
            <td>" . $row['updated'] . "</td>
            <td><a href = 'admindata.php?type=suspendUser&id=" . $row['adminid'] . "&user=suspend'><button class='btn btn-danger'><i class='fa fa-lock fa-lg'></i> Click to Suspend </button></a></td>
        </tr>";
            } else {
                echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>" . $row['work'] . "</td>
            <td>" . $row['updated'] . "</td>
            <td><a href = 'admindata.php?type=suspendUser&id=" . $row['adminid'] . "'><button class='btn btn-success'><i class='fa fa-check fa-lg'></i> Click to Active </button></a></td>
        </tr>";
            }
        }
        echo "</table>";
    }
} else {

    $query = mysqli_query($con, "SELECT * FROM `adminsignup`;");

    echo "
    <table class='table table-bordered table-hover' >;
    <tr style='background-color: #25C096;'>
    <th>Name</th>
    <th>Email</th>
    <th>Contact No.</th>
    <th>Work As</th>
    <th>Account Creation Date/Time</th>
    <th>Status</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['status'] == "active") {
            echo "<tr>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['phone'] . "</td>
        <td>" . $row['work'] . "</td>
        <td>" . $row['updated'] . "</td>
        <td><a href = 'admindata.php?type=suspendUser&id=" . $row['adminid'] . "&user=suspend'><button class='btn btn-danger'><i class='fa fa-lock fa-lg'></i> Click to Suspend </button></a></td>
    </tr>";
        } else {
            echo "<tr>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['phone'] . "</td>
        <td>" . $row['work'] . "</td>
        <td>" . $row['updated'] . "</td>
        <td><a href = 'admindata.php?type=suspendUser&id=" . $row['adminid'] . "&user=act'><button class='btn btn-success'><i class='fa fa-check fa-lg'></i> Click to Active </button></a></td>
    </tr>";
        }
    }
    echo "</table>";
}

$adminid = $_GET['id'];
$user = $_GET['user'];
if ($type == "suspendUser") {

    if ($user == "suspend") {
        $query = mysqli_query($con, "UPDATE `adminsignup` SET `status` = 'suspend' WHERE `adminid` = '$adminid'");
        if ($query) {
            echo "<script>alert('Suspended');
             window.location.href='admindata.php';
             </script>";
        } else {
            echo "<script>alert('Something wents wrong !');
            window.location.href='admindata.php';
            </script>";
        }
    } else {
        $query = mysqli_query($con, "UPDATE `adminsignup` SET `status` = 'active' WHERE `adminid` = '$adminid'");
        if ($query) {
            echo "<script>alert('Activated');
         window.location.href='admindata.php';
         </script>";
        } else {
            echo "<script>alert('Something wents wrong !');
        window.location.href='admindata.php';
        </script>";
        }
    }
}


include("footer.php"); ?>