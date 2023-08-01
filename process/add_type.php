<?php
session_start();
include('config.php');
/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["deviceId"];
$deviceType = $_POST["typeName"];
/*********************************************/
$file = $_FILES['file'] ?? null;
    // Access file details
    $fileName = $file['name'] ?? null;
    $fileTmpName = $file['tmp_name'] ?? null;
    $fileSize = $file['size'];
    $fileType = $file['type'];

    // Handle the file as needed (e.g., move it to a specific location)
    // Example: move the uploaded file to a directory
    $targetDirectory = 'img/device/';


    if ($selectedDevice) {
        $unitName = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE `id`='$selectedDevice'");
        $valueName = mysqli_fetch_array($unitName);
        $unitType = @mysqli_query($con, "SELECT * FROM `device_type` WHERE `type`='$deviceType'");
        $count = mysqli_num_rows($unitType);
        if ($count < 1 && $deviceType != "") {
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            if ($extension === "jpg" || $extension === "png") {
                $randomId = rand(1, 1000);
                $targetFilePath = $targetDirectory . $fileName;
                move_uploaded_file($fileTmpName, '../' . $targetFilePath . "-" . $randomId);
                $unitName = @mysqli_query($con, "INSERT INTO `device_type`(`type`, `device`, `photo_dir`) VALUES ('$deviceType','$selectedDevice','$targetFilePath')");
                $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','Add $deviceType as Type','$currentDate')");
                echo $deviceType . ' is Added to ' . $valueName['name'];
            } else {
                echo "Invalid File. image Must be PNG/JPG";
            }
        } elseif ($deviceType == "" && $file < 1) {
            echo 'Type field is empty';
        } else {
            echo $deviceType . ' is already exist in ' . $valueName['name'];
        }
    }

