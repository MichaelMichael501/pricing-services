
<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $servicesId=$_POST["serviceId"];
    $newPrice=@mysqli_query($con,"DELETE FROM `pricing` WHERE `id`='$servicesId'");
    echo '<script>
            alert("The service has been Deleted.");
            window.location.href="../admin/service_table_list.php";
            </script>';

    
}