<?php

include('config.php');
/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["deviceId"];
$deviceType = $_POST["typeName"];
/*********************************************/
$file = isset($_FILES['file']);

// Access file details
$fileName = isset($file['name']);
$fileTmpName = isset($file['tmp_name']);
$fileSize = isset($file['size']);
$fileType = isset($file['type']);

// Handle the file as needed (e.g., move it to a specific location)
// Example: move the uploaded file to a directory
$targetDirectory = 'img/device/';


if ($selectedDevice) {
    $unitName = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE `id`='$selectedDevice'");
    $valueName = mysqli_fetch_array($unitName);
    $unitType = @mysqli_query($con, "SELECT * FROM `device_type` WHERE `type`='$deviceType'");
    $count = mysqli_num_rows($unitType);
    if ($count < 1 && $deviceType != "") {
        $randomId=rand(1, 1000); 
        $targetFilePath = $targetDirectory . $fileName;
        move_uploaded_file($fileTmpName,'../'. $targetFilePath."-".$randomId);
        $unitName = @mysqli_query($con, "INSERT INTO `device_type`(`type`, `device`, `photo_dir`) VALUES ('$deviceType','$selectedDevice','$targetFilePath')");
        echo $deviceType . ' is Added to ' . $valueName['name'];
    } elseif ($deviceType == "" && $file < 1) {
        echo 'Type field is empty';
    } else {
        echo $deviceType . ' is already exist in ' . $valueName['name'];
    }
}
