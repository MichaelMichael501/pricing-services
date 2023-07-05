<?php
include('config.php');

// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
    $username = $_POST['usernameField'];
    $password = $_POST['password-field'];

    global $con;

    // Prepare a SQL statement to retrieve the user's data based on the provided username
    $sql = "SELECT * FROM `admin_account` WHERE `username` = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a user with the provided username exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if ($password == $user['password']) {
            // Check if the user is already logged in

                    // Set the logged_in session variable
                    $_SESSION['logged_in'] = true;
                    $_SESSION['auth'] =session_id();
                    // Set the username in the session
                    $_SESSION['username'] = $username;

                    // Create a new session record in the database
                    

                    // Redirect the user to the home page or any other authorized page
                    header("Location: ../admin/add_services.php"); 
                    exit(); 
        } else {
            // If the password is incorrect, display an error message
            echo '<script>alert("Invalid password."); window.location.href = "../admin/index.php";</script>';
        }
    } else {
        // If the username is not found, display an error message
        echo '<script>alert("Invalid username."); window.location.href = "../admin/index.php";</script>';
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $con->close();
}


?>
