<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $servicesId=$_POST["servicesId"];
    $servicesPrice=$_POST["price"];
    $newPrice=@mysqli_query($con,"UPDATE `pricing` SET `price`='$servicesPrice' WHERE `id`='$servicesId'");
    $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','The service has been updated.','$currentDate')");
    echo '<script>
            alert("The fee has been successfully updated.");
            window.location.href="../admin/update_services.php";
            </script>';

    
}