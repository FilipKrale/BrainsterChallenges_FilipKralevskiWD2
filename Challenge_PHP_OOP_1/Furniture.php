<?php

class Furniture
{
    private $width;
    private $length;
    private $height;
    private $is_for_seating;
    private $is_for_sleeping;

    public function __construct($width = NULL, $length = NULL, $height = NULL)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }



    /**
     * Get the value of is_for_seating
     */
    public function getIs_for_seating()
    {
        return $this->is_for_seating ? "is for seating" : "is not for seating";
    }

    /**
     * Set the value of is_for_seating
     *
     * @return  self
     */
    public function setIs_for_seating($is_for_seating)
    {
        $this->is_for_seating = $is_for_seating;
        if ($is_for_seating) {
            $this->is_for_seating = true;
        } else {
            $this->is_for_seating = false;
        }
        return $this;
    }

    /**
     * Get the value of is_for_sleeping
     */
    public function getIs_for_sleeping()
    {
        return $this->is_for_sleeping ? "is for sleeping" : "is not for sleeping";
    }

    /**
     * Set the value of is_for_sleeping
     *
     * @return  self
     */
    public function setIs_for_sleeping($is_for_sleeping)
    {
        $this->is_for_sleeping = $is_for_sleeping;
        if ($is_for_sleeping) {
            $this->is_for_sleeping = true;
        } else {
            $this->is_for_sleeping = false;
        }
        return $this;
    }

    public function area()
    {
        return  $this->getWidth() * $this->getLength();
    }

    public function volume()
    {
        return $this->area() * $this->getHeight();
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return  $this->width;
    }

    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }
}
