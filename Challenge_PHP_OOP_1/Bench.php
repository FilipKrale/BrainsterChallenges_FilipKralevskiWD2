<?php
require_once __DIR__ ."/Sofa.php";
require_once __DIR__ ."/Printable.php";

class Bench extends Sofa implements Printable{

    public function __construct($seats, $armrests, $length_opened)
    {
        parent::__construct($seats, $armrests, $length_opened);
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