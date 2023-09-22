<?php

namespace Market\Products;

abstract class Product
{
    protected $name;
    protected $price;
    protected $sellingByKg;

    public function __construct( $price, bool $sellingByKg)
    {
        $this->name = get_class($this);
        $this->price = $price;
        $this->sellingByKg = $sellingByKg;
    }
  
    public function getPrice()
    {
        return $this->price;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSellType()
    {
        return $this->sellingByKg;
    }
}
