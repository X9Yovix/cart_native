<?php
require_once("../mysql/BDConnection.php");
require("GS_Product.php");

class ModelProduct
{
    protected $table = "product";
    protected $conx;

    public function __construct()
    {
        $obj = new BDConnection();
        $this->conx = $obj->getConnection();
    }

    public function fn_promo()
    {
        $sql = "SELECT reference,name_product,price,image_product FROM " . $this->table . " where promo='yes'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }

    public function findSession($ref)
    {
        $sql = "SELECT * FROM " . $this->table . " where reference='$ref'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetch(PDO::FETCH_ASSOC);
        return $refcat;
    }

    public function find($ref)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE reference='$ref'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }

    //page pc
    public function showPcAcer()
    {
        $sql = "SELECT * FROM " . $this->table . " where ref_cat='pc' and brand='acer'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }
    public function showPcLenovo()
    {
        $sql = "SELECT * FROM " . $this->table . " where ref_cat='pc' and brand='lenovo'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }
    public function showPcHp()
    {
        $sql = "SELECT * FROM " . $this->table . " where ref_cat='pc' and brand='hp'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }
    public function findAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $res = $this->conx->query($sql);
        $cat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $cat;
    }

    public function searchInput($search)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE brand like '%$search%' OR 	name_product like '%$search%' ";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }

    //page cat
    public function showSpSamsung()
    {
        $sql = "SELECT * FROM " . $this->table . " where ref_cat='sp' and brand='samsung'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }
    public function showSpHuawei()
    {
        $sql = "SELECT * FROM " . $this->table . " where ref_cat='sp' and brand='huawei'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }
    public function showSpApple()
    {
        $sql = "SELECT * FROM " . $this->table . " where ref_cat='sp' and brand='apple'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }

    public function delete($ref)
    {
        $ref = str_replace("'", "\'", $ref);
        $sql = "DELETE FROM " . $this->table . " where reference='$ref'";
        $res = $this->conx->exec($sql);
        return $res;
    }

    public function add(Product $sg_add)
    {
        $ref_prod = $sg_add->getReference();
        $name_prod = $sg_add->getName_product();
        $brand = $sg_add->getBrand();
        $desc_prod = $sg_add->getDesc_product();
        $price = $sg_add->getPrice();
        $img_prod = $sg_add->getImage_product();
        $promo = $sg_add->getPromo();
        $qty = $sg_add->getQty();
        $refCat = $sg_add->getRef_cat();

        $path = '../../img/' . $img_prod;
        $sql = "INSERT INTO product (reference, name_product, brand, desc_product, price, image_product, promo, qty, ref_cat) values('$ref_prod','$name_prod','$brand','$desc_prod','$price','$path','$promo',$qty,'$refCat')";
        $res = $this->conx->exec($sql);
        return $res;
    }

    public function update(Product $sg_update)
    {
        $ref_prod = $sg_update->getReference();
        $oldRef_prod = $sg_update->getOld_ref();
        $name_prod = $sg_update->getName_product();
        $brand = $sg_update->getBrand();
        $desc_prod = $sg_update->getDesc_product();
        $price = $sg_update->getPrice();
        $img_prod = $sg_update->getImage_product();
        $promo = $sg_update->getPromo();
        $qty = $sg_update->getQty();
        $refCat = $sg_update->getRef_cat();

        $path = '../../img/' . $img_prod;
        $sql = "UPDATE product SET reference = '$ref_prod',
        name_product = '$name_prod',
        brand = '$brand',
        desc_product = '$desc_prod',
        price = '$price',
        image_product = '$path',
        promo = '$promo',
        qty = '$qty',
        ref_cat = '$refCat'
        WHERE reference = '$oldRef_prod'";
        $res = $this->conx->exec($sql);
        return $res;
    }
}
