
<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $servicesId=$_POST["serviceId"];
    $newPrice=@mysqli_query($con,"DELETE FROM `pricing` WHERE `id`='$servicesId'");
    $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','The service has been Deleted.','$currentDate')");
    echo '<script>
            alert("The service has been Deleted.");
            window.location.href="../admin/service_table_list.php";
            </script>';

    
}