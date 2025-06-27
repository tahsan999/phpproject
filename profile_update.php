<?php 
session_start();
require 'db.php';
$id = $_SESSION['logged_id'];
$select = "SELECT * FROM users WHERE id=$id";
$select_res= mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

$name = $_POST['name'];
$email = $_POST['email'];
$photo = $_FILES['photo'];

if($photo['name'] != ''){

    if($after_assoc['photo'] != null){
        $delete_from = 'uploads/user/'.$after_assoc['photo'];
        unlink($delete_from);
    }

    $after_explode = explode('.', $photo['name']);
    $extension = end($after_explode);
    $file_name = uniqid().'.'.$extension;
    
    $new_location = 'uploads/user/'.$file_name;
    move_uploaded_file($photo['tmp_name'], $new_location);

    $update = "UPDATE users SET name='$name', email='$email', photo='$file_name' WHERE id=$id";
    mysqli_query($db_connect, $update);
    $_SESSION['success'] = 'Profile Updated';
    header('location:edit_profile.php');

}
else{
    $update = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    mysqli_query($db_connect, $update);
    $_SESSION['success'] = 'Profile Updated';
    header('location:edit_profile.php');
}



?>