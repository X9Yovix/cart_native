<?php
require_once("../Model/Model_Product.php");
require_once("../Model/Model_Category.php");
session_start();

$mp = new ModelProduct();
$sgp = new Product();
$prod = $mp->findAll();

$mc = new ModelCategory();
$showAllCat = $mc->showAllCat();

if (isset($_POST["updatedata"])) {
    $ref_prod = htmlspecialchars($_POST['ref_prod']);
    $oldRef_prod = htmlspecialchars($_POST['oldRef_prod']);
    $name_prod = htmlspecialchars($_POST['name_prod']);
    $brand = htmlspecialchars($_POST['brand']);
    $desc_pro = htmlspecialchars($_POST['desc_prod']);
    $price = htmlspecialchars($_POST['price']);
    $img_prod = htmlspecialchars($_POST['img_prod']);
    $promo = htmlspecialchars($_POST['promo']);
    $qty = htmlspecialchars($_POST['qty']);
    $refCat = htmlspecialchars($_POST['refCat']);

    $price = floatval($price);
    
    $ref_prod = str_replace("'", "\'", $ref_prod);
    $oldRef_prod  = str_replace("'", "\'", $oldRef_prod);
    $name_prod  = str_replace("'", "\'", $name_prod);
    $brand  = str_replace("'", "\'", $brand);
    $desc_pro  = str_replace("'", "\'", $desc_pro);

    if (empty($ref_prod) || empty($name_prod) || empty($brand) || empty($desc_pro) || empty($price) || empty($promo) || empty($qty) || empty($refCat)) {
        echo ('<script>alert("fields are empty");</script>');
    }elseif (!preg_match("/^[A-Z]{2,3}[0-9]+$/", $ref_prod)) {
        echo ('<script>alert("Invalid Reference");</script>');
    } else {

        $sgp->setReference($ref_prod);
        $sgp->setOld_ref($oldRef_prod);
        $sgp->setName_product($name_prod);
        $sgp->setBrand($brand);
        $sgp->setDesc_product($desc_pro);
        $sgp->setPrice($price);
        $sgp->setImage_product($img_prod);
        $sgp->setPromo($promo);
        $sgp->setQty($qty);
        $sgp->setRef_cat($refCat);

        $updated = $mp->update($sgp);
        if ($updated) {
            //echo ('<script>alert("updated");</script>');
            echo ('<script>window.location.reload()</script>');
        } /* else {
            //echo ('<script>alert("no");</script>');
            
        } */
    }
}

if (isset($_POST["addproduct"])) {
    $add_ref_prod = htmlspecialchars($_POST['add_ref_prod']);
    $add_name_prod = htmlspecialchars($_POST['add_name_prod']);
    $add_brand = htmlspecialchars($_POST['add_brand']);
    $add_desc_pro = htmlspecialchars($_POST['add_desc_prod']);
    $add_price = htmlspecialchars($_POST['add_price']);
    $add_img_prod = htmlspecialchars($_POST['add_img_prod']);
    $add_promo = htmlspecialchars($_POST['add_promo']);
    $add_qty = htmlspecialchars($_POST['add_qty']);
    $add_refCat = htmlspecialchars($_POST['add_refCat']);

    $add_price=floatval($add_price);

    //$add_ref_prod = str_replace("'", "\'", $add_ref_prod);
    $add_name_prod  = str_replace("'", "\'", $add_name_prod);
    $add_brand = str_replace("'", "\'", $add_brand);
    $add_desc_pro   = str_replace("'", "\'", $add_desc_pro);

    if (empty($add_ref_prod) || empty($add_name_prod) || empty($add_brand) || empty($add_desc_pro) || empty($add_price) || empty($add_promo) || empty($add_qty) || empty($add_refCat)) {
        echo ('<script>alert("fields are empty");</script>');
    }elseif (!preg_match("/^[A-Z]{2,3}[0-9]+$/", $add_ref_prod)) {
        echo ('<script>alert("Invalid Reference");</script>');
    }  else {

        $sgp->setReference($add_ref_prod);
        $sgp->setName_product($add_name_prod);
        $sgp->setBrand($add_brand);
        $sgp->setDesc_product($add_desc_pro);
        $sgp->setPrice($add_price);
        $sgp->setImage_product($add_img_prod);
        $sgp->setPromo($add_promo);
        $sgp->setQty($add_qty);
        $sgp->setRef_cat($add_refCat);


        $added = $mp->add($sgp);
        if ($added) {
            //echo ('<script>alert("added");</script>');
            echo ('<script>window.location.reload()</script>');
        } /* else {
            echo ('<script>alert("no");</script>');
        } */
    }
}

include('../View/adminProd.php');
