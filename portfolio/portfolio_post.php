<?php
session_start();
require '../db.php';

$title = $_POST['title'];
$photo = $_FILES['photo'];

$after_explode = explode('.', $photo['name']);
$extension = end($after_explode);
$file_name = uniqid().'.'.$extension;

$new_location = '../uploads/portfolio/'.$file_name;
move_uploaded_file($photo['tmp_name'], $new_location);


$insert = "INSERT INTO portfolios (title, photo)VALUES('$title', '$file_name')";
mysqli_query($db_connect, $insert);

$_SESSION['success'] = 'New Portfolio Added';
header('location:portfolio.php');
?>