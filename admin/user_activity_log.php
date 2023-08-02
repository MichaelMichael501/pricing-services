<!DOCTYPE html>
<?php

include('../include/authentication.php');
include('../process/config.php');
include('../include/calling_profile.php');
include('../include/include_body.php');
?>
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
  <?php echo $adminNavigation; 
  
  include('../include/activity_log_table.php');
  
  ?>

   

  <?php
  echo $adminScript;
  ?>
  <script src="../js/search_filter.js"></script>
</body>


</html>