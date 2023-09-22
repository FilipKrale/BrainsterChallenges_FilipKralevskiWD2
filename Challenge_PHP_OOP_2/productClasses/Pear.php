<?php

use Market\Products\Product;

class Pear extends Product
{
    public function __construct($price, bool $sellingByKg)
    {
           
        parent::__construct($price, $sellingByKg);
    }
}