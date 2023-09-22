<?php

use Market\Products\Product;

class Kiwi extends Product
{
    public function __construct($price, bool $sellingByKg)
    {
           
        parent::__construct($price, $sellingByKg);
    }
}
