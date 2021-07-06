<?php

include("config.php");

$id = $_GET['id'];


// ***************************** Delete Record *******************************

$query = mysqli_query($con, "DELETE FROM `management` WHERE `id` = $id ");
if ($query) {
    echo "<script>
    alert('Deleted 1 record from management department');
    window.location.href='management.php';
    </script>";
} else {
    echo "<script>
    alert('Failed');
    window.location.href='management.php';
    </script>";
}

// ***************************** View Record *******************************


// ***************************** Edit Record *******************************