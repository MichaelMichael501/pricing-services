<h5>What service do you need?</h5>
<?php
include('../process/config.php');
  $category = $_POST["category"];

  if ($category) {
    //Get the type of selected Device
    
    $devices = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE `category`='$category'");
    echo '<select name="selectServices" id="selectServices" class="select-tag">';
    echo "<option value=''>--Select Services--</option>";
        
        while ($value = mysqli_fetch_array($devices)) {
            
            echo "<option value='" .$value['id']. "'>" . $value['name'] . "</option>";
        }
        
    
    echo'</select><br>';
    
    
      

  } 

  

