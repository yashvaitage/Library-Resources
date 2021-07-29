<head>
    <title> Journal Department</title>
</head>


    <?php include './lrheader.php';
    include("config.php"); ?>
    <!-- search bar -->
    <h4 class="text mt-55" style= "padding-top:20px">List of Journal Department Books</h4>

    <form method="POST">
<div class="input-group srch float-right">
    <div class="form-outline">
        <input type="search" id="form1" class="form-control" name="search" placeholder="Search Books.." />
        
    </div>
    <button type="submit" name="submit" class="btn btn-primary">
        <i class="fa fa-search"></i>
    </button> 
</div></form>
<div class="clear">
</div>

    <!-- List of Computer Department Books -->
        <?php

    if (isset($_POST['submit'])) {
        $query = mysqli_query($con, "SELECT * from journal where bookname like '%$_POST[search]%' ");
        if (mysqli_num_rows($query) == 0) {
            echo "Sorry! No book found. try searching again.";
        } else {
            echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: #25C096;'>";
            echo "<th>";
            echo "Book ID";
            echo "</th>";
            echo "<th>";
            echo "Book Name";
            echo "</th>";
            echo "<th>";
            echo "Author Name";
            echo "</th>";
            echo "<th>";
            echo "Edition";
            echo "</th>";
            echo "<th>";
            echo "Action";
            echo "</th>";

            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>";
                echo $row['id'];
                echo "</td>";
                echo "<td>";
                echo $row['bookname'];
                echo "</td>";
                echo "<td>";
                echo $row['author'];
                echo "</td>";
                echo "<td>";
                echo $row['edition'];
                echo "</td>";
                echo "<td>";
                // echo $row['action'];
                echo "<a href='admin/".$row['file']."' class='btn btn-primary'>View</a>\t";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {


        $query = mysqli_query($con, "SELECT * FROM `journal`;");
        echo "<table class='table table-bordered table-hover' >";
        echo "<tr style='background-color: #25C096;'>";
        echo "<th>";
        echo "Book ID";
        echo "</th>";
        echo "<th>";
        echo "Book Name";
        echo "</th>";
        echo "<th>";
        echo "Author Name";
        echo "</th>";
        echo "<th>";
        echo "Edition";
        echo "</th>";
        echo "<th>";
        echo "Action";
        echo "</th>";

        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>";
            echo $row['id'];
            echo "</td>";
            echo "<td>";
            echo $row['bookname'];
            echo "</td>";
            echo "<td>";
            echo $row['author'];
            echo "</td>";
            echo "<td>";
            echo $row['edition'];
            echo "</td>";
            echo "<td>";
            // echo $row['action'];
            echo "<a href='bookdetails.php' class='btn btn-primary'>View</a>\t";
            echo "<a href='bookdetails.php' class='btn btn-primary'>Download</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    <?php include("footer.php"); ?>
