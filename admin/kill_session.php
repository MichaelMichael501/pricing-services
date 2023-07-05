<?php
// Initialize the session
session_start();

// Destroy all sessions
session_destroy();

// Redirect the user to the login page or any other appropriate page
header("Location: index.php"); // Replace "login.php" with the appropriate page URL
exit();
?>