<?php
class Product
{
    private $reference, $old_ref, $name_product, $brand, $desc_product, $price, $image_product, $reg_date, $promo, $qty, $ref_cat;

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function getName_product()
    {
        return $this->name_product;
    }

    public function setName_product($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getImage_product()
    {
        return $this->image_product;
    }

    public function setImage_product($image_product)
    {
        $this->image_product = $image_product;

        return $this;
    }

    public function getReg_date()
    {
        return $this->reg_date;
    }

    public function setReg_date($reg_date)
    {
        $this->reg_date = $reg_date;

        return $this;
    }

    public function getPromo()
    {
        return $this->promo;
    }

    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    public function getQty()
    {
        return $this->qty;
    }


    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }


    public function getRef_cat()
    {
        return $this->ref_cat;
    }


    public function setRef_cat($ref_cat)
    {
        $this->ref_cat = $ref_cat;

        return $this;
    }

    public function getOld_ref()
    {
        return $this->old_ref;
    }

    public function setOld_ref($old_ref)
    {
        $this->old_ref = $old_ref;

        return $this;
    }

    public function getDesc_product()
    {
        return $this->desc_product;
    }

    public function setDesc_product($desc_product)
    {
        $this->desc_product = $desc_product;

        return $this;
    }
}
