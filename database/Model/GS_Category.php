<?php
class Category
{
    private $reference, $name_cat, $oldref;

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function getName_cat()
    {
        return $this->name_cat;
    }

    public function setName_cat($name_cat)
    {
        $this->name_cat = $name_cat;

        return $this;
    }


    public function getOldref()
    {
        return $this->oldref;
    }


    public function setOldref($oldref)
    {
        $this->oldref = $oldref;

        return $this;
    }
}
