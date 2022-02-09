<?php
session_start();
require_once("../Model/Model_Product.php");


$mp = new ModelProduct();
$res = [];
if (isset($_POST["searchbtn"])) {
    $search = htmlspecialchars($_POST['searchinput']);
    $search = preg_replace("#[^0-9a-z]#i", "", $search);
    if (empty($search)) {
        echo ('<script>alert("field is empty");</script>');
    } else {
        $res  = $mp->searchInput($search);
    }
}

if (isset($_POST['addToCart'])) {
    if (isset($_SESSION['cart'])) {
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
        $item_array = array(
            'reference' => $_POST['reference'],
            'price' => $_POST['price'],
            'qty' => 1
        );
        $_SESSION['cart'][0] = $item_array;
    }
}

include('../View/searchRes.php');
