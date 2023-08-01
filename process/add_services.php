<?php
session_start();
include('../process/config.php');
/**Get the Id of pricing using Ajax Request***/
$serviceName = $_POST["serviceName"];
/*********************************************/

if ($serviceName) {
    $checkServiceName=mysqli_query($con,"SELECT * FROM `services` WHERE LOWER(`name`)=LOWER('$serviceName')");
    $count=mysqli_num_rows($checkServiceName);
    if ($count < 1 && $serviceName != "") {
        $unitName = @mysqli_query($con, "INSERT INTO `services`(`name`) VALUES ('$serviceName')");
        $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','Add $serviceName in services','$currentDate')");
        echo $serviceName . ' is Added';
    } elseif ($serviceName == "") {
        echo 'service field is empty';
    } else {
        echo $serviceName . ' is already exist in ';
    }
}
