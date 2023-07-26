<?php

include('config.php');

$selectedType = $_POST["selectedType"];
$selectedServices = $_POST["selectedServices"];
$inputFee = $_POST["inputFee"];

if ($selectedType && $selectedServices && $inputFee) {
    $unitType = mysqli_query($con, "SELECT * FROM `device_type` WHERE `id`='$selectedType'");
    $valueUnit = mysqli_fetch_array($unitType);
    $deviceId = $valueUnit['device'];
    $unitName = mysqli_query($con, "INSERT INTO `pricing`(`device`, `type`, `services`, `price`) VALUES ('$deviceId','$selectedType','$selectedServices','$inputFee')");
    echo 'Service and fee successfully added';
} else {
    echo 'All fields must be filled';
}

