<?php 
session_start();
require '../db.php';

$title = $_POST['title'];
$desp = $_POST['desp'];

$insert = "INSERT INTO services(title, desp)VALUES('$title', '$desp')";
mysqli_query($db_connect, $insert);

$_SESSION['success'] = "New Service Added";
header('location:service.php');


?>