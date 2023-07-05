<h4 class="title-list">Select Services:</h4>
<?php
include('../process/config.php');
$typeId = $_POST['typeId'];
if ($typeId) {
  /***Calling Table of Industry****************************************************/
  $industryQuery = @"SELECT * FROM services";
  $result = mysqli_query($con, $industryQuery);
  /*******************************************************/
  echo '<ul class="list-services">';
  while ($row = mysqli_fetch_assoc($result)) {
    $getServices = $row['id'];
    $devices = @mysqli_query($con, "SELECT * FROM `pricing` WHERE `services`='$getServices' AND `type`='$typeId' ");
    $value = mysqli_fetch_array($devices);
    if ($value === null || $value['services'] != $row['id']) {
      $serviceId = $row['id'];
      echo '<li>';
      echo '<input type="radio" id="selectedItems" name="selectedItems" value="' . $serviceId  . '">';
      echo $row['name'];
      echo '</li>';
    }
  }
  echo '</ul>';
}

?>