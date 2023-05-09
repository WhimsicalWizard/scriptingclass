<?php
include_once('config.php');
$id=$_GET['id'];
$result =mysqli_query($con,"delete from user where id='$id';");
if(!$result) die("Failed to delete: ".mysqli_error($con));
echo "<font color='green'>Successfully Deleted";
echo "<br/><a href='index.php'>View Result</a>";


?>