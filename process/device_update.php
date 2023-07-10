<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $deviceId=$_POST["selectDevice"];
    $servicesId=$_POST["servicesId"];
    $newPrice=@mysqli_query($con,"UPDATE `pricing` SET `device`='$deviceId' WHERE `id`='$servicesId'");
    echo '<script>
            alert("The Device/Requisite has been successfully updated.");
            window.location.href="../admin/update_services.php";
            </script>';

    
}