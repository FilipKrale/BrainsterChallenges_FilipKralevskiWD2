<?php
use Market\Products\Product;
use Market\Stall\MarketStall;
use Market\Cart\Cart;

require_once "require.php";


$kiwi = new Kiwi(35 , true); 
$orange = new Orange(55,true);
$apple = new Apple(220,false);
$pear = new Pear(77,true);
$pepper = new Pepper(43,true);
$potato = new Potato(185,false);
$grape = new Grapes(120,true);
$products1 = [$kiwi,$apple];
$products2 = [$pepper , $potato];
//
$tezga1 = new MarketStall($products1);
$tezga1->addProductToMarket($grape);
$tezga2 = new MarketStall($products2);
$tezga2->addProductToMarket($pear);
//
$cart1 = new Cart();
$cart2 = new Cart();

$cart1->addToCart($tezga1->getItem("Apple",15));
$cart1->addToCart($tezga1->getItem("Grapes",25));
$cart1->addToCart($tezga2->getItem("Pear",3));
$cart1->addToCart($tezga2->getItem("Pepper",3));
//


$cart1->printReceipt();
$cart1->printReceipt();