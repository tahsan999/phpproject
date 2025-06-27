<?php 
session_start();
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);

$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);

$flag = false;

if(empty($name)){
    $flag = true;
    $_SESSION['name_err'] = 'Please Enter Your Name';
}
if(empty($email)){
    $flag = true;
    $_SESSION['email_err'] = 'Please Enter Your Email';
}
else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $flag = true;
        $_SESSION['email_err'] = 'Please Enter Valid Email';
    }
}

if(empty($password)){
    $flag = true;
    $_SESSION['password_err'] = 'Please Enter Your Password';
}
else {
    if(!$upper || !$lower || !$number || strlen($password) < 8){
        $flag = true;
        $_SESSION['password_err'] = 'Password should includes 1 Uppercase, 1 Lowercase1 1 number';
    }
}

if($flag){
    header('location:register.php');
}

else{
    
    $insert = "INSERT INTO users(name, email, password)VALUES('$name', '$email', '$after_hash')";
    mysqli_query($db_connect, $insert);
    $_SESSION['success'] = 'User Registration Successfully';

    header('location:register.php');
}

?>