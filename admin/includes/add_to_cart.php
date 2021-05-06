<?php
session_start();
ob_start();
if (!isset($_SESSION['user_id'])) {
    header('location:../login.php');
} else {
    include("db.php");
    $user_id = $_SESSION["user_id"];
    $product_name = $_POST['cart'];
    $addCart = "INSERT INTO cart (user_id, product_name)VALUE('$user_id', '$product_name')";
    $cart_RESULT = mysqli_query($con, $addCart);
    if ($cart_RESULT) {
        header('location:../index.php');
    } else {
        die('error adding to cart: ' . mysqli_error($con));
    }
}
