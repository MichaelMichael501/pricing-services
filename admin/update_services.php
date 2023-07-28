<!DOCTYPE html>
<?php
include('../include/include_body.php');
//include('../include/authentication.php');
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
  <script src="../js/update_services.js"></script>
</head>

<body>
  <?php echo $adminNavigation; ?>
  <div class="content">
    <div class="container">
      <div class="select-class">
        <h2>Update Services</h2>
        <br>
        <h5>Select Category:</h5>
        <select name="category" id="category" class="select-tag">
          <option value="">-- Select Category --</option>
          <option value="Electronics/Appliances">Electronics/Applainces</option>
          <option value="Electrical">Electrical</option>
          <option value="Construction">Construction</option>
          <option value="RMS">RMS</option>
        </select><br><br>
        <div class="select-needs" id="selectNeeds" name="selectNeeds"></div>
        <div class="select-type" id="selectTypeField" name="selectTypeField"></div>
        <button class="show-services" name="showServices" id="showServices">Show</button>
      </div>
      <div class="show-price" id="servicesField" name="servicesField">
      </div>
    </div>
    <?php
    echo $adminScript;
    ?>
</body>

<footer class="all-footer">
  <img src="../img/AyusinkophlogoPNG.png" alt="logo" class="head-logo">
</footer>

</html>