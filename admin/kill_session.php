<?php
// Initialize the session
include('../process/config.php');
$firstlog = @mysqli_query($con, "INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('sample','Add sample as Type','sample')");
$insertlog = mysqli_query($con, "INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('sample','Add sample as Type','sample')");
?>