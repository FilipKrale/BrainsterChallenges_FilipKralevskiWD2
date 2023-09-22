<?php

use Market\Products\Product;

class Orange extends Product
{
    public function __construct($price, bool $sellingByKg)
    {
           
        parent::__construct($price, $sellingByKg);
    }
}