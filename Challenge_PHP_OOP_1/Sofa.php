<?php  
require_once __DIR__ . "/Furniture.php";
require_once __DIR__ . "/Printable.php";

class Sofa extends Furniture implements Printable{
    private $seats;
    private $armrests;
    private $length_opened;

    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }

    


    /**
     * Get the value of seats
     */ 
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set the value of seats
     *
     * @return  self
     */ 
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get the value of armrests
     */ 
    public function getArmrests()
    {
        return $this->armrests;
    }

    /**
     * Set the value of armrests
     *
     * @return  self
     */ 
    public function setArmrests($armrests)
    {
        $this->armrests = $armrests;

        return $this;
    }

    /**
     * Get the value of length_opened
     */ 
    public function getLength_opened()
    {
        return $this->length_opened;
    }

    /**
     * Set the value of length_opened
     *
     * @return  self
     */ 
    public function setLength_opened($length_opened)
    {
        $this->length_opened = $length_opened;

        return $this;
    }

    public function area_opened()
    {
        if($this->getIs_for_sleeping()){
            return $this->getWidth() * $this->getLength_opened();
        }else{
            echo "This sofa is for sitting only, it has {$this->armrests} armrests and  {$this->seats} seats.";
        }
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