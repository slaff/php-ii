<?php
namespace Libs;

class Car {

    use AutomaticWindows;

    const WHEELS = 4;
    private $key;
    private $color;
    private $running = false;

    public function __construct(string $color)
    {
       $this->color = $color;
       $this->running  = true;
    }

    public function getColor()
    {
      return $this->color;
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

