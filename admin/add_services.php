<!DOCTYPE html>
<?php
include('../include/include_body.php');
include('../process/config.php');
?>
<? ?>
<html lang="en">

<head>
  <title>Add Services</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/pricing_service.css">
  <link rel="stylesheet" type="text/css" href="../css/body.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/add_type.js"></script>
</head>

<body>
  <?php echo $adminNavigation; ?>
  <h1 class="title-add">Create services</h1>
  <div class="appliances-electronics">
    <div class="appliances-services">
      <h2>Add needed service</h2>
      <select name="category" id="category" class="select-tag">
        <option value="">-- Select Category --</option>
        <option value="Electronics/Applainces">Electronics/Applainces</option>
        <option value="Electrical">Electrical</option>
        <option value="Construction">Construction</option>
        <option value="RMS">RMS</option>
      </select><br><br>
      <label for="">needed services:</label>
      <input type="text" class="add-btn" id="deviceField">
      <br>
      <button role="button" id="addDevice" name="addDevice" class="add-typebtn">Add</button>
    </div>

    <div class="appliances-services">
      <h2>Add type</h2>
      <?php
      $category = "";
      include('../include/device_list.php');
      ?><br><br>
      <label for="">needed services Type:</label>
      <input type="text" class="add-btn" name="typeField" id="typeField"><br><br>
      <input type="file" name="myFileInput" id="myFileInput" accept="image/*">
      <br>
      <button role="button" id="addType" name="addType" class="add-typebtn">Add</button>
    </div>
  </div>
  
  <div class="add-services">
    
    <div class="select-price">
    <h2>Add Services</h2>
      <?php $devices = @mysqli_query($con, "SELECT * FROM `device_type`");
      echo '<select name="selectedType" id="selectedType" class="select-tag">';
      echo "<option value=''>--Select Type--</option>";

      while ($value = mysqli_fetch_array($devices)) {
        echo "<option value='" . $value['id'] . "'>" . $value['type'] . "</option>";
      }

      echo '</select>';
      ?>
      <h5>fee:</h5>
      <input type="number" id="fee" name="fee" class="add-btn">
      <br>
    </div>

    <div class="choose-services" id="services"></div>
    <div class='add-servicesbtn'><button role="button" id="addServices" name="addServices" class="add-typebtn">Add</button></div>
    
  </div>                                                                                                                                                                                           

</body>

<footer class="all-footer">
  <img src="../img/AyusinkophlogoPNG.png" alt="logo" class="head-logo">
</footer>

</html>