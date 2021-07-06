<?php

include("config.php");

$id = $_GET['id'];


// ***************************** Delete Record *******************************

$query = mysqli_query($con, "DELETE FROM `computer` WHERE `id` = $id ");
if ($query) {
    echo "<script>
    alert('Deleted 1 record from computer department');
    window.location.href='computer.php';
    </script>";
} else {
    echo "<script>
    alert('Failed');
    window.location.href='computer.php';
    </script>";
}

// ***************************** View Record *******************************


// ***************************** Edit Record *******************************