<?php
require_once("../Model/Model_Category.php");
session_start();
$mc = new ModelCategory();

if (isset($_GET["ref"])) {
    $delCat = $mc->delete($_GET["ref"]);
    if ($delCat) {
        //echo ('<script>alert("deleted");</script>');
        header("location:adminCat.php");
    } /* else {
        //echo ('<script>alert("no");</script>');
    } */
}

include('../View/adminCat.php');
