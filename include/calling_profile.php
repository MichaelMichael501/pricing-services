<?php
include('../include/calling_profile.php');
session_start();

$callingProfile=mysqli_query($con,"SELECT * FROM `account_profile` WHERE id='{$_SESSION['adminId']}'");
$getValue=mysqli_fetch_array($callingProfile);
$profile= $getValue['photo_dir'];