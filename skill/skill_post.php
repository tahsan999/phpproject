<?php
session_start();
require '../db.php';

$skill = $_POST['skill'];
$percentage = $_POST['percentage'];

$insert = "INSERT INTO skills(skill, percentage)VALUES('$skill', $percentage)";
mysqli_query($db_connect, $insert);
$_SESSION['added'] = 'New Skill Added';
header('location:skill.php');
?>