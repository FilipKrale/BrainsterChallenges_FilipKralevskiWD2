<?php

use Market\Products\Product;

class Bananna extends Product
{
    public function __construct($price, bool $sellingByKg)
    {
           
        parent::__construct($price, $sellingByKg);
    }
}