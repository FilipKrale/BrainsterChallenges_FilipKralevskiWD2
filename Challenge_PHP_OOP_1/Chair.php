<?php  
require_once __DIR__ . "/Furniture.php";
require_once __DIR__ . "/Printable.php";

class Chair extends Furniture implements Printable{


    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }

    public function print()
    {
        return get_class($this).', ' . $this->getIs_for_seating() .', ' . $this->area() .'cm2.';
    }

    public function sneakpeek()
    {
        return get_class($this) . '.';
    }

    public function fullinfo()
    {
        return get_class($this) .', ' . $this->getIs_for_seating() .', ' . $this->area() .'cm2,  width:' .$this->getWidth().'cm, length:' .$this->getLength().'cm, height:' . $this->getHeight() . 'cm.'; 
    }


}