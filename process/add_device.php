<?php
session_start();
include('../process/config.php');
/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["deviceName"];
$deviceCategory = $_POST["category"];
/*********************************************/

if ($selectedDevice) {
    
    if ($selectedDevice != "") {
        $currentDate=date('m - d - Y');
        $unitName = @mysqli_query($con, "INSERT INTO `needed_services`(`name`, `category`) VALUES ('$selectedDevice','$deviceCategory')");
        $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','Add $selectedDevice as particular','$currentDate')");
        echo $selectedDevice . ' is Added';
    } elseif ($selectedDevice == "") {
        echo 'Device field is empty';
    } else {
        echo $selectedDevice . ' is already exist in ';
    }
}
