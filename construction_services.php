<!DOCTYPE html>
<?php 
include('include/include_body.php');
include('process/config.php');
$category='construction';
?>
<html lang="en">

<head>
  <title>Transparent Pricing</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/pricing_service.css">
  <link rel="stylesheet" type="text/css" href="css/body.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/ajax_request.js"></script>
  <title>Pricing</title>
</head>

<body>
  
<?php echo $navigation;?>

  <div class="content">
    <h1 class="page-title">Transparent Pricing of Construction Services</h1>
    <p class="about-page">
      Our basic services are offered at a fair set price.
      Repair fees may only be quoted after a technician troubleshoots the problem.
      No hidden fees and no extra charges.
    </p>
    <div class="container">
      <div class="select-class">
        <h5>What needs service?</h5>
        <?php
        include('include/device_list.php');
        ?>

        <div id="result" class="device-type"></div>

        <div id="services" class="device-services"></div>


      </div>
      <div class="show-price" id="price" name="price">
        <img src="img/fill-in (2).svg" class="fill-in" id="fillIn">
      </div>
    </div>
  </div>
</body>
<footer class="all-footer">
<img src="img/AyusinkophlogoPNG.png" alt="logo" class="head-logo">
</footer>

</html>