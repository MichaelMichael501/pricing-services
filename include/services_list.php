<?php
include('../process/config.php');
$typeId = $_POST['typeId'];
if ($typeId) {
  /***Calling Table of Industry****************************************************/
  $industryQuery = "SELECT * FROM services";
  $result = mysqli_query($con, $industryQuery);
  /*******************************************************/
  echo '<ul class="list-services">';
  while ($row = mysqli_fetch_assoc($result)) {
    $deviceId = $row['id'];
    $devices = mysqli_query($con, "SELECT * FROM `pricing` WHERE `services`='$deviceId' AND `type`='$typeId'");
    $value = mysqli_fetch_array($devices);
    if ($value === null || $value['services'] != $deviceId) {
      echo '<li>';
      echo '<input type="radio" id="selectedItems" name="selectedItems" value="' . $deviceId . '">';
      echo $row['name'];
      echo '</li>';
    }
  }
  echo '</ul>';
}
?>
