<?php

/**Call the Mysql Databse*********************/
include('../process/config.php');
/*********************************************/

/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["selectedType"];
$category=""; 
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

  echo "<label>Unit name:</label><br><br>";
  include('device_list.php');
  echo "<button id=updateDevice class='update-btn'>Update</button>";
  echo "<br><br><label>Unit Type:</label><br><br>";
  include('type_list.php');
  echo "<br><br>";
  echo "</div>";
  echo "</div>";
  echo "<div class='all-services'>";
  echo "<h4>All Services</h4>";
  $devicesLoop = @mysqli_query($con, "SELECT * FROM `pricing` WHERE `type`='$selectedDevice'");
  while($valueLoop = mysqli_fetch_array($devicesLoop)){
    $unitServiceId=$valueLoop['services'];
    $unitService = @mysqli_query($con, "SELECT * FROM `services` WHERE `id`='$unitServiceId'");
    $valueservice = mysqli_fetch_array($unitService);
    echo "<form action='../process/update.php' method='post'>";
    echo "<h5>".$valueservice['name']."</h5>";
    echo "<h5>Fee: &#x20B1;".$valueLoop['price']."</h5>";
    echo "<input type='hidden' id='servicesId' name='servicesId' value='".$valueLoop['id']."'>";
    echo "<h5>New Fee: &#x20B1; <input type='number' id='price' name='price' class='add-btn'/><button type='submit' class='update-btn'>Update</button></h5>";
    echo "</form>";
    echo"<br>";
  }
  echo"</div>";

  
}
  ?>

  