<?php
session_start();
require_once("../Model/Model_Category.php");
$mc = new ModelCategory();
$sgc = new Category();

$cat = $mc->findAll();


if (isset($_POST["updatedata"])) {
    $ref_cat = htmlspecialchars($_POST['ref_cat']);
    $name_cat = htmlspecialchars($_POST['name_cat']);
    $old_ref = htmlspecialchars($_POST['old_ref']);

    //$ref_cat = str_replace("'", "\'", $ref_cat);
    $name_cat  = str_replace("'", "\'", $name_cat);
    //$old_ref  = str_replace("'", "\'", $old_ref); 

    if (empty($ref_cat) || empty($name_cat)) {
        echo ('<script>alert("fields are empty");</script>');
    } elseif (!preg_match("/^[A-Z]{2}$/", $ref_cat)) {
        echo ('<script>alert("Invalid Reference");</script>');
    } else {

        $sgc->setReference($ref_cat);
        $sgc->setName_cat($name_cat);
        $sgc->setOldref($old_ref);

        $updated = $mc->update($sgc);
        if ($updated) {
            //echo ('<script>alert("updated");</script>');
            echo ('<script>window.location.reload()</script>');
        } /* else {
            echo ('<script>alert("not updated");</script>');
        } */
    }
}

if (isset($_POST["addcategory"])) {
    $add_ref_cat = htmlspecialchars($_POST['add_ref_cat']);
    $add_name_cat = htmlspecialchars($_POST['add_name_cat']);

    /* $add_ref_cat = str_replace("'", "\'", $add_ref_cat);*/
    $add_name_cat   = str_replace("'", "\'", $add_name_cat);

    if (empty($add_ref_cat) || empty($add_name_cat)) {
        echo ('<script>alert("fields are empty");</script>');
    } elseif (!preg_match("/^[A-Z]{2}$/", $add_ref_cat)) {
        echo ('<script>alert("Invalid Reference");</script>');
    } else {

        $sgc->setReference($add_ref_cat);
        $sgc->setName_cat($add_name_cat);

        $added = $mc->add($sgc);
        if ($added) {
            echo ('<script>window.location.reload()</script>');
            //exit();
        }
    }
}

include('../View/adminCat.php');
