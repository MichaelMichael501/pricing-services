<h5>What is the Type of needs services?</h5>
<?php
include('../process/config.php');
$selectedparticulars = $_POST["Device"];

if ($selectedparticulars) {
  // Get the type of the selected Device

  $devices = @mysqli_query($con, "SELECT * FROM `device_type` WHERE `device`='$selectedparticulars'");
  echo '<select name="selectType" id="selectType" class="select-tag">';
  echo "<option value=''>--Select Type--</option>";

  while ($value = mysqli_fetch_array($devices)) {
    $typeid = $value['id'];
    $checkType = mysqli_query($con, "SELECT * FROM `pricing` WHERE `type`='$typeid'");
   
      echo "<option value='" . $value['id'] . "'>" . $value['type'] . "</option>";
  
  }

  echo '</select>';
} else {
  echo '<select><option>Please Select the device</option></select>';
}
