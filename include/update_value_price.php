<?php

/**Call the Mysql Databse*********************/
include('../process/config.php');
/*********************************************/

/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["selectedType"];
/*********************************************/

if ($selectedDevice) {
  //Get the type of selected Device
  /**SQL to get all Id's***********************/
  $devices = @mysqli_query($con, "SELECT * FROM `pricing` WHERE `type`='$selectedDevice'");
  $value = mysqli_fetch_array($devices);
  /*******************************************/

  /** Get all Id's****************************/
  $unitId = $value['device'];
  $unitTypeId = $value['type'];
  /*******************************************/



  /**SQL To get all Category******************/
  $unitName = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE `id`='$unitId'");
  $valueName = mysqli_fetch_array($unitName);
  $unitType = @mysqli_query($con, "SELECT * FROM `device_type` WHERE `id`='$unitTypeId'");
  $valueType = mysqli_fetch_array($unitType);
  
  /*******************************************/

  /**Unit Image*******************************/
  
  /*******************************************/

  echo "<label>Unit name:</label><br>";
  echo $valueName['name'] . "<br><br>";
  echo "<label>Unit Type:</label><br>";
  echo $valueType['type'] . "<br><br>";
  echo "</div>";
  echo "</div>";
  while($valueLoop = mysqli_fetch_array($devices)){
    $unitServiceId=$valueLoop['services'];
    $unitService = @mysqli_query($con, "SELECT * FROM `services` WHERE `id`='$unitServiceId'");
    $valueservice = mysqli_fetch_array($unitService);
    
  }

  
}
  ?>