<?php
namespace Libs;

class Car {

    use AutomaticWindows;

    const WHEELS = 4;
    private $key;
    private $color;
    private $running = false;
    
    // This is a static property
    public static $usage = 0;

    public function __construct(string $color)
    {
       $this->color = $color;
       $this->running  = true;

       // usage of static property
       self::$usage = self::$usage + 1; 
    }

   // This is an example of static method
   public static function getWheels() {
      // $this->getColor(); // <--- $this is NOT allowed in static method

      return static::WHEELS;
   } 
 

    public function getColor()
    {
      return $this->color;
    }

    public function setColor($color) {
      $this->color = $color;
    }

    public function drive($key = 'yes') {
        if  ($key == 'yes') {
        $this->start();
        } else
            {
            echo "You need a key to drive";
            }
}

    public function start () {
        echo "You need ". self::WHEELS . " wheels drive. Have a nice trip";
    }
  
    public function fillTank()
    {
       if($this->running) {
          throw new CarException("Car must be stopped before filling the tank");
       }
       
       echo "car filled";
    }

    public function __toString() {
      return __CLASS__.": ".$this->color;
   }
}

