<?php

include('config.php');
/**Get the Id of pricing using Ajax Request***/
$selectedType = $_POST["selectedType"];
$selectedServices = isset($_POST["selectedServices"]);
$inputFee = $_POST["inputFee"];
/*********************************************/

if ($selectedType) {
    if($selectedType !="" && $selectedServices!="" && $inputFee!=""){
    $unitType = @mysqli_query($con, "SELECT * FROM `device_type` WHERE `id`='$selectedType'");
    $valueUnit = mysqli_fetch_array($unitType);
    $diviceId=$valueUnit['device'];
    $unitName = @mysqli_query($con, "INSERT INTO `pricing`(`device`, `type`, `services`, `price`) VALUES ('$diviceId','$selectedType','$selectedServices','$inputFee')");
    echo 'Service and price Succesfully added';}
    else{echo'All field must be filled';}
}

else{echo'All field must be filled';}
