<?php
require_once("../Model/Model_Product.php");
session_start();
$mp = new ModelProduct();

if (isset($_GET["ref"])) {
    $delCat = $mp->delete($_GET["ref"]);
    if ($delCat) {
        //echo ('<script>alert("deleted");</script>');
        header("location:adminProd.php");
    } /* else {
        //echo ('<script>alert("no");</script>');
    } */
}

include('../View/adminProd.php');
