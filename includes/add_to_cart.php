<?php
session_start();
ob_start();
if (!isset($_SESSION['user_id'])) {
    header('location:../login.php');
} else {
    include("db.php");
    $user_id = $_SESSION["user_id"];
    $product_name = $_POST['cart'];

    $selectExist = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_id = '$product_name'";
    $resultExist = mysqli_query($con, $selectExist);
    $countExist = mysqli_num_rows($resultExist);
    // check if exist 
    if ($countExist >= 1) {
        //get number of this product in cart
        $countExist = mysqli_fetch_array($resultExist);
        $countExistR = intval($countExist['quantity']);
        $Update = $countExistR + 1;
        $UpdateCart = "UPDATE cart SET quantity = '$Update' WHERE user_id = '$user_id' AND product_id = '$product_name'";
        $cart_update_RESULT = mysqli_query($con, $UpdateCart);
        if ($cart_update_RESULT) {
            header('location:../index.php');
        } else {
            die('error adding to cart: ' . mysqli_error($con));
        }
    } else {
        $addCart = "INSERT INTO cart (user_id, product_id, quantity)VALUE('$user_id', '$product_name', 1)";
        $cart_RESULT = mysqli_query($con, $addCart);
        if ($cart_RESULT) {
            header('location:../index.php');
        } else {
            die('error adding to cart: ' . mysqli_error($con));
        }
    }
}
