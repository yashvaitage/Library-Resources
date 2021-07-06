<head>
    <title> Magazine Department</title>
</head>


<?php include 'header.php';
include("config.php"); ?>
<!-- search bar -->
<h4 class="text mt-55" style="padding-top:20px">List of Magazines </h4>

<form method="POST">
    <div class="input-group srch float-right ">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" name="search" placeholder="Search Books.." />

        </div>
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
<div class="clear">
</div>

<!-- List of Magazine Department Books -->
<?php

if (isset($_POST['submit'])) {
    $query = mysqli_query($con, "SELECT * from magazine where bookname like '%$_POST[search]%' ");
    if (mysqli_num_rows($query) == 0) {
        echo "Sorry! No book found. try searching again.";
    } else {
        $query = mysqli_query($con, "SELECT * FROM `magazine`;");

        echo "
        <table class='table table-bordered table-hover' >;
        <tr style='background-color: #25C096;'>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Edition</th>
        <th>Action</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($query)) {
            echo "
            <tr>
                <td>" . $row['bookname'] . "</td>
                <td>" . $row['author'] . "</td>
                <td>" . $row['edition'] . "</td>
                <td><a href='magazine_operation.php?id=" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-trash fa-lg'></i></a></td>
            </tr>";
        }
        echo "</table>";
    }
} else {
    $query = mysqli_query($con, "SELECT * FROM `magazine`;");

    echo "
    <table class='table table-bordered table-hover' >;
    <tr style='background-color: #25C096;'>
    <th>Book Name</th>
    <th>Author Name</th>
    <th>Edition</th>
    <th>Action</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
            <td>" . $row['bookname'] . "</td>
            <td>" . $row['author'] . "</td>
            <td>" . $row['edition'] . "</td>
            <td><a href='magazine_operation.php?id=" . $row['id'] . "' class='btn btn-danger'><i class='fa fa-trash fa-lg'></i></a></td>
        </tr>";
    }
    echo "</table>";
}

include("footer.php"); ?>