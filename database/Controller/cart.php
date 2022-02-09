<?php
require_once("../Model/Model_Product.php");
session_start();
$mp = new ModelProduct();

if (isset($_POST['delete'])) {
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "reference");
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["reference"] == ($_POST['delete'])) {
                //echo($value["product_id"].' '.($_POST['delete']));
                unset($_SESSION['cart'][$key]);
                //echo ('<script>alert("Product has been removed");</script>');
                //echo ('<script>window.location.reload()</script>');
            }
            //print_r($value);
        }
    }
}

if (isset($_POST['deleteAll'])) {
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        //echo ('<script>window.location.reload()</script>');
    }
}

include('../View/cart.php');
