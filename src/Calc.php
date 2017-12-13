<?php
namespace Libs;

class Calc 
{
  const PI = 3.14; // constant

  private $memory;

  public function plus($a, $b) {
    $this->memory = $a+$b;
    return $this->memory;
  }

  public function minus($a, $b) {
    $this->memory = $a - $b;
    return $this->memory;
  }

  public function multiply($a, $b) {
     // 3 * 4 = 3 + 3 + 3 + 3
     $result = 0; 
     for($i=0; $i< $b; $i++) {
         $result = $this->plus($result, $a); // call another method from the same class
     }
     
     return $result;
  }

  public function getMemory() {
    return $this->memory; // call property from the same class
  }

  public function areaCircle($radius) {
    // π * pow(r, 2)  
    $result = self::PI * pow($radius, 2); // call constant from the same class
    return $result;
  }
} 
