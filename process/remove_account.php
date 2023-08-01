
<?php
session_start();
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $accountId=$_POST["serviceId"];
    $removeAccount=@mysqli_query($con,"DELETE FROM `admin_account` WHERE `id`='$accountId'");
    $removeInformation=@mysqli_query($con,"DELETE FROM `account_information` WHERE `id`='$accountId'");
    
    echo '<script>
            alert("The account has been Deleted.");
            window.location.href="../admin/service_table_list.php";
            </script>';

    
}