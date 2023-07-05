<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in'])) {
    // Redirect the user to the login page or any other unauthorized page
    header("Location: login.php"); // Replace "login.php" with the appropriate page URL
    exit();
}
