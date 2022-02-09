<?php
require_once("../Model/Model_Product.php");
session_start();

$mp = new ModelProduct();
$promo = $mp->fn_promo();

//var_dump($_SESSION['user_log']);
if (isset($_POST['addToCart'])) {
  /* session_start(); */
  //print_r($_POST['reference']);
  if (isset($_SESSION['cart'])) {
    $item_array_id = array_column($_SESSION['cart'], "reference");
    if (in_array($_POST['reference'], $item_array_id)) {
      //print_r($_SESSION['cart']);
      echo "<script>alert('Product is already added in the cart')</script>";
      //echo "<script>window.location.reload()</script>";
      //echo "<script>window.location = 'index.php'</script>";
      //header('location:index.php');
    } else {
      //print_r($_SESSION['cart']);
      $count = count($_SESSION['cart']);
      $item_array = array(
        'reference' => $_POST['reference'],
        'price' => $_POST['price'],
        'qty' => 1
      );
      $_SESSION['cart'][$count] = $item_array;
      //echo "<script>window.location.reload()</script>";
    }
  } else {
    //print_r($_SESSION['cart']);
    $item_array = array(
      'reference' => $_POST['reference'],
      'price' => $_POST['price'],
      'qty' => 1
    );
    // Create new session variable
    $_SESSION['cart'][0] = $item_array;
    //print_r($_SESSION['cart']);
    //echo "<script>window.location.reload()</script>";
  }
}

include('../View/index.php');
