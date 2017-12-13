<?php
namespace Libs;

class Car {

    const WHEELS = 4;
    private $key;
    private $color;

    public function __construct(string $color)
    {
       $this->color = $color;
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

}

