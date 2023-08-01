<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['profilePic']) && $_FILES['profilePic']['error'] === 0) {
        // Get the uploaded file details
        $uploadedFile = $_FILES['profilePic']['tmp_name']; // Temporary path of the uploaded file
        $destinationFolder = 'img/profile/'; // Destination folder where you want to move the file
        $destinationFile = $destinationFolder . rand(1000, 9999) . $_FILES['profilePic']['name']; // Destination path for the moved file
        
        // Check file size
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        if ($_FILES['profilePic']['size'] > $maxFileSize) {
            echo '<script>
                    alert("File size exceeds the limit of 5MB.");
                    window.location.href="../admin/add_account.php";
                </script>';
            exit();
        }
        
        // Check file extension (you can add this check if needed)
        
        // Move the uploaded file to the destination folder
        if (move_uploaded_file($uploadedFile, "../" . $destinationFile)) {
            $adminId = "admin" . rand(1000, 9999) . date('mdY');
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
            $middleName = mysqli_real_escape_string($con, $_POST['middleName']);
            $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
            $gender = mysqli_real_escape_string($con, $_POST['inlineRadioOptions']);
            $homeAddress = mysqli_real_escape_string($con, $_POST['homeAddress']);

            // Insert account data into the database
            $insertAccount = mysqli_query($con, "INSERT INTO `admin_account`(`id`, `username`, `password`) 
            VALUES ('$adminId','$username','$password')");

            $insertInformation = mysqli_query($con, "INSERT INTO `account_information`(`id`, `first_name`, `middle_name`, `last_name`, `gender`, `address`) 
            VALUES ('$adminId','$firstName','$middleName','$lastName','$gender','$homeAddress')");

            $insertProfile = mysqli_query($con, "INSERT INTO `account_profile`(`id`, `photo_dir`) 
            VALUES ('$adminId','$destinationFile')");

            if ($insertAccount && $insertInformation && $insertProfile) {
                $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','Successfuly created the account of $firstName $middleName $lastName','$currentDate')");
                echo '<script>
                    alert("You\'re all set! The account has been created successfully.");
                    window.location.href="../admin/add_account.php";
                </script>';
                exit();
            } else {
                $insertlog=mysqli_query($con,"INSERT INTO `activity_log`(`account_id`, `activity`, `date`) VALUES ('{$_SESSION['adminId']}','Failed created the account','$currentDate')");
                echo '<script>
                    alert("Error occurred while creating the account. Please try again.");
                    window.location.href="../admin/add_account.php";
                </script>';
                exit();
            }
        } else {
            echo '<script>
                    alert("Error occurred while uploading the file. Please try again.");
                    window.location.href="../admin/add_account.php";
                </script>';
            exit();
        }
    }
}
?>
