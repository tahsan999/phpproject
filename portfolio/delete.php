<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$select = "SELECT * FROM portfolios WHERE id=$id";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$delete_from = '../uploads/portfolio/'.$after_assoc['photo'];
unlink($delete_from);

$delete = "DELETE FROM portfolios WHERE id=$id";
mysqli_query($db_connect, $delete);

$_SESSION['delete'] = 'Portfolio Item Deleted';
header('location:portfolio.php');
?>