<?php
include_once('config.php');
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM user WHERE id='$id';");
if (!$result) {
    die("Failed to delete: " . mysqli_error($con));
} else {
    echo "<script>alert('Data deleted successfully');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}
?>
