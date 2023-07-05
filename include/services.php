<h5>What service do you need?</h5>
<?php
include('../process/config.php');
  $selectedDevice = $_POST["Device"];

  if ($selectedDevice) {
    //Get the type of selected Device
    
    $devices = @mysqli_query($con, "SELECT * FROM `pricing` WHERE `type`='$selectedDevice'");
    echo '<select name="selectServices" id="selectServices" class="select-tag">';
    echo "<option value=''>--Select Services--</option>";
        
        while ($value = mysqli_fetch_array($devices)) {
            $servicesId=$value['services'];
            $services = @mysqli_query($con, "SELECT * FROM `services` WHERE `id`='$servicesId'");
            $valueId = mysqli_fetch_array($services);
            echo "<option value='" .$value['id']. "'>" . $valueId['name'] . "</option>";
        }
        
    
    echo'</select><br>';
    
    echo '<input type="submit" id="showPrice" name="showPrice" value="Check The Price" class="pricing-btn">';
      

  } 

  

