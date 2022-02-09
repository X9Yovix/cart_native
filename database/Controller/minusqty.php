<?php
session_start();

foreach ($_SESSION['cart'] as $key => $value) {
    if ($value['reference'] == $_GET['ref']) {

        $_SESSION["cart"][$key]['qty'] -=  1;
        header('location:cart.php');
    }
}
