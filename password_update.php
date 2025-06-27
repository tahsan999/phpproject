<?php
session_start();
require 'db.php';
$id = $_SESSION['logged_id'];
$new_password = $_POST['new_password'];
$after_hash = password_hash($new_password, PASSWORD_DEFAULT);
$confirm_password = $_POST['confirm_password'];

if($new_password != $confirm_password){
    $_SESSION['not_match'] ='New Password and Confirm Password  does not matched';
    header('location:edit_profile.php');
}
else{
    $update = "UPDATE users SET password='$after_hash' WHERE id=$id";
    mysqli_query($db_connect, $update);
    $_SESSION['password_update'] ='Password Changed';
    header('location:edit_profile.php');
    
}

?>