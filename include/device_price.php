<?php

/**Call the Mysql Databse*********************/
include('../process/config.php');
/*********************************************/

/**Get the Id of pricing using Ajax Request***/
$selectedDevice = $_POST["Device"];
/*********************************************/

if ($selectedDevice) {
  //Get the type of selected Device
  /**SQL to get all Id's***********************/
  $devices = @mysqli_query($con, "SELECT * FROM `pricing` WHERE `id`='$selectedDevice'");
  $value = mysqli_fetch_array($devices);
  /*******************************************/

  /** Get all Id's****************************/
  $unitId = $value['device'];
  $unitTypeId = $value['type'];
  $unitServiceId = $value['services'];
  /*******************************************/



  /**SQL To get all Category******************/
  $unitName = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE `id`='$unitId'");
  $valueName = mysqli_fetch_array($unitName);
  $unitType = @mysqli_query($con, "SELECT * FROM `device_type` WHERE `id`='$unitTypeId'");
  $valueType = mysqli_fetch_array($unitType);
  $unitService = @mysqli_query($con, "SELECT * FROM `services` WHERE `id`='$unitServiceId'");
  $valueservice = mysqli_fetch_array($unitService);
  /*******************************************/

  /**Unit Image*******************************/
  echo "<div class = 'unit'>";
  echo "<img src='" . $valueType['photo_dir'] . "' class='unit-image' alt='Image'>";
  echo "<div class='unit-desc'>";
  /*******************************************/

  echo "<label>Unit name:</label><br>";
  echo $valueName['name'] . "<br><br>";
  echo "<label>Unit Type:</label><br>";
  echo $valueType['type'] . "<br><br>";
  echo "<label>Service:</label><br>";
  echo $valueservice['name'] . "<br>";
  echo "</div>";
  echo "</div>";
  echo "<div class='fee'>";
  echo "<label>" . $valueservice['name'] . " Fee</label><br>";
  echo "<p class='amount'>&#x20B1;" . $value['price'] . "</p> Per Unit";
  echo "</div>";
  if ($valueservice['id'] == '2') {
    echo "<div class='descrip'>";
    echo "<p>Technician diagnoses the problem and quotes you a final repair price. No hidden or extra fees.</p>";
    echo "<p>If you decide to proceed with the repair, your total costs will include 
    the checkup fee and labor. If you decline the repair, please pay our technician this checkup fee.</p>";
    echo "</div>";
  }
  echo "<div class='includes'>";
  if ($valueservice['id'] == '1' && $valueName['id'] == '1' && $valueType['id'] == '1') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Inverter/Non-Inverter of 1hp</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 225 for Inverter type</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 225 for over 1.5hp</p>";
  } elseif ($valueservice['id'] == '1' && $valueName['id'] == '1' && $valueType['id'] == '2') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Not to be confused with Suspended type.</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Multipoint systems are priced per indoor unit</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 1,475 for complete unit pull-down cleaning</p>";
  } elseif ($valueservice['id'] == '1' && $valueName['id'] == '1' && $valueType['id'] == '3') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>3 TR unit or less</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 500 per additional TR</p>";
  } elseif ($valueservice['id'] == '1' && $valueName['id'] == '1' && $valueType['id'] == '4' || $valueType['id'] == '5' || $valueType['id'] == '6') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>3 TR unit or less</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 500 per additional TR</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Multipoint systems are priced per indoor unit</p>";
  } elseif ($valueservice['id'] == '1' && $valueName['id'] == '1' && $valueType['id'] == '7') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Non-Inverter of 1.5hp or less</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 225 for over 1.5hp</p>";
  }

  if ($valueservice['id'] == '3' && $valueName['id'] == '1') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Inverter/Non-Inverter of 1.5hp or less</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 350 per additional 0.5hp</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 1,300.00 for new bracket</p>";
  }

  if ($valueservice['id'] == '3' && $valueName['id'] == '1') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Inverter/Non-Inverter of 1.5hp or less</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 350 per additional 0.5hp</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 1,300.00 for new bracket</p>";
  }

  if ($valueservice['id'] == '4' && $valueName['id'] == '1') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Disconnection of unit from electrical outlet</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Seperation of indoor & outdoor units</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Removal of unit from wall</p>";
  }

  if ($valueservice['id'] == '5' && $valueName['id'] == '1') {
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Inverter/Non-Inverter of 1hp</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 500 per additional 0.5hp</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>+Php 1,500.00 for new bracket</p>";
  }

  if ($valueservice['id'] == '6' && $valueName['id'] == '1') {
    echo "<p>Technician evaluates your space and informs you about:</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Suitable type of unit for the area, wall mounted, tower, or ceiling mounted</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Required cooling capacity for your space</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Required electrical load and power distribution</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Suitable location for indoor and outdoor units</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Drainage and conduits route</p>";
    echo "<p><img src='img/bullet-point.png' alt='' class='bullet-point'>Total installation costs</p>";
  }


  echo "<h3>Notes:</h3>";
  if ($valueName['id'] == 1) {
    echo "<p>a. Php 395 due if canceled while technician is on-site.</p>";
    echo "<p>b. +Php 350 for unit located above 10ft/3m";
    echo "<p>c. Materials, repairs, freon, permits & parking fees are not included.";
    echo "<p>d. Prices include 12% VAT.";
  }

  else{
    echo "<p>a. Php 395 due if canceled while technician is on-site.</p>";
    echo "<p>b. Materials, permits & parking fees are not included.";
    echo "<p>c. Prices include 12% VAT.";
  }



  echo "</div>";
}
