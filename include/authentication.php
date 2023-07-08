<?php
session_start();

// Check if the user is logged in
if ($_SESSION['auth'] != session_id()) {
    // Redirect the user to the login page or any other unauthorized page
    header("Location:../admin/ "); // Replace "login.php" with the appropriate page URL
    exit();
}
