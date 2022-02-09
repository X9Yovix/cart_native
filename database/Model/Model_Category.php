<?php
require_once("../mysql/BDConnection.php");
require("GS_Category.php");

class ModelCategory
{

    protected $table = "category";
    protected $conx;

    public function __construct()
    {
        $obj = new BDConnection();
        $this->conx = $obj->getConnection();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $res = $this->conx->query($sql);
        $cat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $cat;
    }

    public function showAllCat()
    {
        $sql = "SELECT reference FROM " . $this->table;
        $res = $this->conx->query($sql);
        $refcat = $res->fetchAll(PDO::FETCH_ASSOC);
        return $refcat;
    }

    public function find($ref)
    {
        $sql = "SELECT * FROM " . $this->table . " where reference='$ref'";
        $res = $this->conx->query($sql);
        $refcat = $res->fetch(PDO::FETCH_ASSOC);
        return $refcat;
    }

    public function delete($ref)
    {
        $ref = str_replace("'", "\'", $ref);
        $sql = "DELETE FROM " . $this->table . " where reference='$ref'";
        $res = $this->conx->exec($sql);
        return $res;
    }

    public function add(Category $sg_add)
    {
        $ref_cat = $sg_add->getReference();
        $name_cat = $sg_add->getName_cat();
        $sql = "INSERT INTO category (reference, name_cat) values('$ref_cat','$name_cat')";
        $res = $this->conx->exec($sql);
        return $res;
    }

    public function update(Category $sg_update)
    {
        $ref_cat = $sg_update->getReference();
        $name_cat = $sg_update->getName_cat();
        $old_ref = $sg_update->getOldref();
        $sql = "UPDATE category SET reference = '$ref_cat' , name_cat = '$name_cat' WHERE reference = '$old_ref'";
        $res = $this->conx->exec($sql);
        return $res;
    }
}
