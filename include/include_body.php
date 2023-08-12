<?php
//Naviagation bar
$navigation =
  <<<HTML
<header id="header" class="fixed-top">
  <img src="img/logo-removebg-preview.png" alt="" class="head-logo">
  <h1 class="logo me-auto"><a href="index.php">Crempco Services</a></h1>

  <nav id="navbar" class="navbar">
    <ul>
      <li class="dropdown maintenance-menu">
        <a href="index.php"><span>Maintenance Services</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="index.php">Electronics/Applicanes</a></li>
          <li><a href="electrical_services.php">Electrical</a></li>
          <li><a href="power_tools.php">Power Tools</a></li>
          <li><a href="construction_services.php">Construction Services</a></li>
          <li><a href="restaurant_maintenance_services.php">Restaurant Maintenance Services</a></li>
        </ul>
      </li>
    </ul>
    <ul>
      <li class="dropdown cleaning-menu">
        <a href="#"><span>Cleaning Services</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="janitorial">Janitorial</a></li>
          <li><a href="home_services.php">Home Services</a></li>
        </ul>
      </li>
    </ul>
    <ul>
      <li class="dropdown mobile-menu">
        <a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="index.php">Electronics/Applicanes</a></li>
          <li><a href="electrical_services.php">Electrical</a></li>
          <li><a href="power_tools.php">Power Tools</a></li>
          <li><a href="construction_services.php">Construction Services</a></li>
          <li><a href="restaurant_maintenance_services.php">Restaurant Maintenance Services</a></li>
        </ul>
      </li>
    </ul>
    
    
  </nav><!-- .navbar -->
  </ul>
</nav>

</header><!-- End Header -->

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


$adminScript =
  <<<HTML
    <script src="../js/add_services.js"></script>
    <script src="../js/account_dropdown.js"></script>
HTML;
