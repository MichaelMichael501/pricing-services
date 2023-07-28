<!DOCTYPE html>
<?php
include('../include/include_body.php');
include('../include/authentication.php');
include('../process/config.php');
?>
<? ?>
<html lang="en">

<head>
  <title>Add Services</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/body.css">
  <link rel="stylesheet" type="text/css" href="../css/service_list_table.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/add_type.js"></script>
</head>

<body>
  <?php echo $adminNavigation; ?>

  <?php include('../include/services_table.php'); ?>


  <?php
  echo $adminScript;
  ?>
  <script src="../js/search_filter.js"></script>
</body>

<footer class="all-footer">
  <img src="../img/AyusinkophlogoPNG.png" alt="logo" class="head-logo">
</footer>

</html>