<?php
include('config.php');

// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
    $username = $_POST['usernameField'];
    $password = $_POST['password-field'];

    $adminAccount = @mysqli_query($con, "SELECT * FROM `admin_account` WHERE `username` = '$username'");
    $checkAccount = mysqli_num_rows($adminAccount);
    $getPassword = mysqli_fetch_array($adminAccount);

    if ($checkAccount > 0) {
        if ($getPassword['password'] == $password) {
            $_SESSION['auth'] = session_id();
            header("location:../admin/add_services.php");
        } else {
            echo '<script>
            alert("Invalid Password.");
            window.location.href="../admin/";
            </script>';
        }
    } else {
        echo '<script>
            alert("Invalid Login");
            window.location.href="../admin/";
            </script>';
    }
}
