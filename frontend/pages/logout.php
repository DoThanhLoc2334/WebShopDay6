<?php session_start();
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    header('location:login.php');
} else {
    header('location: /Webshop_Day5/frontend/index.php');
    echo 'User not login!';
    die;
}
