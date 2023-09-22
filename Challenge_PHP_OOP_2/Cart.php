<?php


namespace Market\Cart;

class Cart
{
    private $cartItems = [];

    public function addToCart(array $item)
    {
        array_push($this->cartItems, $item);
    }
    public function getCartItems()
    {
        return $this->cartItems;
    }
    public function printReceipt()
    {
         if (empty($this->cartItems)) {
            echo "Your cart is empty";
        } else {
            $productList = $this->cartItems;
            $result = "";
            $totalPrice = null;
            foreach ($productList as $values) {

                $object = $values['Item'];
                $amount = $values['Amount'];
                $name = $object->getName();
                $price = $object->getPrice();
                $sellType = $object->getSellType();
                $productPrice = $amount * $price;

                $productInfo = "$name | $amount" . ($sellType ? "kgs" : "gunny sacks") . "| total :" . $productPrice . " denars";
                $result .= $productInfo . "<br>";
                $totalPrice += $productPrice;
            }
            echo "$result Final price amount:$totalPrice denars <br> <hr>";
           
        }
    }
}
