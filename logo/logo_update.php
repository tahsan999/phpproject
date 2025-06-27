<?php 
session_start();
require '../db.php';
$select_logo = "SELECT * FROM logos";
$select_logo_res = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_res);

$logo = $_FILES['logo'];

$delete_from = '../uploads/logo/'.$after_assoc_logo['logo'];
unlink($delete_from);

$after_explode = explode('.', $logo['name']);
$extension = end($after_explode);
$file_name = uniqid().'.'.$extension;

$new_location = '../uploads/logo/'.$file_name;
move_uploaded_file($logo['tmp_name'], $new_location);

$update = "UPDATE logos SET logo='$file_name'";
mysqli_query($db_connect, $update);

$_SESSION['success'] = 'Logo Changed';
header('location:logo.php');

?>