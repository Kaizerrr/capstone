<?php

include('config.php');
$id = $_GET['id'];
$delete = "DELETE FROM user_table WHERE id = $id";
$run_data = mysqli_query($con, $delete);

if ($run_data) {
    header('location:index.php');
} else {
    echo "Error";
}