<?php
require_once("../Model/Model_Product.php");
session_start();
$mp = new ModelProduct();

$showSpSamsung = $mp->showSpSamsung();
$showSpHuawei = $mp->showSpHuawei();
$showSpApple = $mp->showSpApple();

if (isset($_POST['addToCart'])) {
    if (isset($_SESSION['cart'])) {
        //print_r($_SESSION['cart']);
        $item_array_id = array_column($_SESSION['cart'], "reference");
        if (in_array($_POST['reference'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart')</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'reference' => $_POST['reference'],
                'price' => $_POST['price'],
                'qty' => 1
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        //print_r($_SESSION['cart']);
        $item_array = array(
            'reference' => $_POST['reference'],
            'price' => $_POST['price'],
            'qty' => 1
        );
        $_SESSION['cart'][0] = $item_array;
    }
}

include('../View/category_sp.php');
