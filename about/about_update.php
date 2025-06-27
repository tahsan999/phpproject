<?php
session_start();
require '../db.php';

$title = $_POST['title'];
$name = $_POST['name'];
$desp = $_POST['desp'];

$update = "UPDATE abouts SET title='$title', name='$name', desp='$desp'";
mysqli_query($db_connect, $update);

$_SESSION['success'] = 'About information updated';
header('location:about.php');
?>