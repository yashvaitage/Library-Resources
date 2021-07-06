<?php

include("config.php");

$id = $_GET['id'];


// ***************************** Delete Record *******************************

$query = mysqli_query($con, "DELETE FROM `magazine` WHERE `id` = $id ");
if ($query) {
    echo "<script>
    alert('Deleted 1 record from magazine department');
    window.location.href='magazine.php';
    </script>";
} else {
    echo "<script>
    alert('Failed');
    window.location.href='magazine.php';
    </script>";
}

// ***************************** View Record *******************************


// ***************************** Edit Record *******************************