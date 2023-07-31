<?php
$adminId=$_SESSION['adminId'];
$callingProfile=mysqli_query($con,"SELECT * FROM `account_profile` WHERE id='$adminId'");
$getValue=mysqli_fetch_array($callingProfile);
$getInfo=mysqli_query($con,"SELECT * FROM `account_information` WHERE `id`='$adminId'");
$getName=mysqli_fetch_array($getInfo);
$userName=$getName['first_name'];
if(isset($getValue['photo_dir'])){
$profile="../". $getValue['photo_dir'];}
else{
    $profile="../img/AyusinkophlogoPNG.png";
}