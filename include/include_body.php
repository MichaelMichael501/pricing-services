<?php
//Naviagation bar
$navigation =
  <<<HTML
  <div class="navigation">
    <div class="header-title">
    <img src="img/AyusinkophlogoPNG.png" alt="logo" class="head-logo">
    <h1 class="logo-text me-auto">AyusinKo.ph</h1>
    </div>
    <div class="navigation-link">
      <a href="index.php">Home</a></li>
      <a href="index.php">Electronics/Appliances</a>
      <a href="construction_services.php">Construction Services</a>
      <a href="electrical_services.php">Electrical Services</a>
      <a href="restaurant_maintenance_services.php">RMS</a>
    </div>
    
  </div>


HTML;
$adminNavigation =
  <<<HTML


<div class="admin-navigation">
    <img src="../img/AyusinkophlogoPNG.png" alt="logo" class="head-logo">
    <div class="dropdown">
        <div>
            <div class='profile-row' id="profilePic">
                <h4>$userName</h4>
                <img src="$profile" alt="Profile Picture" width="100" height="100" class="profile-pic" id="profilePic">
            </div>
        </div>
        <div class="dropdown-content" id="myDropdown">
            <a href="../admin/add_services.php">Add Services</a>
            <a href="../admin/update_services.php">Update Services</a>
            <a href="../admin/service_table_list.php">Services List</a>
            <a href="../admin/activity_log.php">User's</a>
            <a href="../process/logout.php">Logout</a>
        </div>
    </div>
</div>

HTML;


$adminScript=
<<<HTML
    <script src="../js/add_services.js"></script>
    <script src="../js/account_dropdown.js"></script>
HTML;
