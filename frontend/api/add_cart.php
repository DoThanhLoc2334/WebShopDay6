<?php
// Kiểm tra session, nếu đã đăng nhập rồi, chuyển hướng tới trang chính
session_start();

include_once(__DIR__ . '/../../dbconnect.php');
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$quantity = $_POST['quantity'];

if(isset($_SESSION['cart'])){
    $data = $_SESSION['cart'];
    $data[$id] = [
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'quantity' => $quantity,
        'total' => ($price * $quantity)
    ];
}else{
    $data[$id] = [
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'quantity' => $quantity,
        'total' => ($price * $quantity)
    ];
}
$_SESSION['cart'] = $data;
echo json_encode($_SESSION['cart']);
?>

