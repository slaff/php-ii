<?php
namespace Libs;

class Calc 
{
  private $memory;

  public function plus($a, $b) {
    $this->memory = $a+$b;
    return $this->memory;
  }

  public function minus($a, $b) {
    $this->memory = $a - $b;
    return $this->memory;
  }


  public function getMemory() {
    return $this->memory;
  }
} 
