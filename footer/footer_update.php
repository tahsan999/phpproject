<?php 
session_start();
require '../db.php';

$footer_text = $_POST['footer_text'];

$update = "UPDATE footer SET footer_text='$footer_text'";
mysqli_query($db_connect, $update);
$_SESSION['success'] = 'Footer Content updated';
header('location:footer.php');

?>