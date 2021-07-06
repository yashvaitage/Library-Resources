<?php

include("config.php");

$id = $_GET['id'];


// ***************************** Delete Record *******************************

$query = mysqli_query($con, "DELETE FROM `thesis` WHERE `id` = $id ");
if ($query) {
    echo "<script>
    alert('Deleted 1 record from thesis department');
    window.location.href='thesis.php';
    </script>";
} else {
    echo "<script>
    alert('Failed');
    window.location.href='thesis.php';
    </script>";
}

// ***************************** View Record *******************************


// ***************************** Edit Record *******************************