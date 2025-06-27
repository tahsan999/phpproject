<?php
session_start();
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM services WHERE id=$id";
mysqli_query($db_connect, $delete);

$_SESSION['delete'] = 'Service Deleted Successfully';
header('location:service.php');
?>