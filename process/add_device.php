<?php

include('../process/config.php');
/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["deviceName"];
$deviceCategory = $_POST["category"];
/*********************************************/

if ($selectedDevice) {
    $unitName = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE `name`='$selectedDevice'");
    $count = mysqli_num_rows($unitName);
    if ($count < 1 && $selectedDevice != "") {
        $unitName = @mysqli_query($con, "INSERT INTO `needed_services`(`name`, `category`) VALUES ('$selectedDevice','$deviceCategory')");
        echo $selectedDevice . ' is Added';
    } elseif ($selectedDevice == "") {
        echo 'Device field is empty';
    } else {
        echo $selectedDevice . ' is already exist in ';
    }
}
