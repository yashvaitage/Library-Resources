<?php

include("config.php");

$id = $_GET['id'];


// ***************************** Delete Record *******************************

$query = mysqli_query($con, "DELETE FROM `journal` WHERE `id` = $id ");
if ($query) {
    echo "<script>
    alert('Deleted 1 record from journal department');
    window.location.href='journal.php';
    </script>";
} else {
    echo "<script>
    alert('Failed');
    window.location.href='journal.php';
    </script>";
}

// ***************************** View Record *******************************


// ***************************** Edit Record *******************************