<?php

include("config.php");

// ***************************** student_message.php *******************************
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM `contact` WHERE `id` = $id ");
if ($query) {
    echo "<script>
    alert('Deleted 1 record');
    window.location.href='student_message.php';
    </script>";
} else {
    echo "<script>
    alert('Failed');
    window.location.href='student_message.php';
    </script>";
}

