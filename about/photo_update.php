<?php
session_start();
require '../db.php';

 $about = "SELECT * FROM abouts";
 $about_res = mysqli_query($db_connect, $about);
 $about_assoc = mysqli_fetch_assoc($about_res);

 $delete_from = '../uploads/about/'. $about_assoc['photo'];
 unlink($delete_from);

$photo = $_FILES['photo'];

$after_explode = explode('.', $photo['name']);
$extension = end($after_explode);
$file_name = uniqid().'.'.$extension;

$new_location = '../uploads/about/'.$file_name;
move_uploaded_file($photo['tmp_name'], $new_location);

$update = "UPDATE abouts SET photo='$file_name'";
mysqli_query($db_connect, $update);
$_SESSION['photo'] = 'Photo Updated';
header('location:about.php');
?>