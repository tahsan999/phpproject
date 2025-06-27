<?php 
session_start();
require 'db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT COUNT(*) as total FROM users WHERE email='$email'";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['total'] == 1){
    $select2 = "SELECT * FROM users WHERE email='$email'";
    $select_result2 = mysqli_query($db_connect, $select2);
    $after_assoc2 = mysqli_fetch_assoc($select_result2);
    if(password_verify($password, $after_assoc2['password'])){
        $_SESSION['logged'] = 'Logged in';
        $_SESSION['logged_id'] = $after_assoc2['id'];
        header('location:dashboard.php');
    }
    else{
    $_SESSION['wrong'] = 'Wrong Password';
    header('location:login.php');
    }
}
else{
    $_SESSION['exist'] = 'Email does not exist';
    header('location:login.php');
}

?>