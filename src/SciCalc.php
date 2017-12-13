<?php
namespace Libs;

class SciCalc extends Calc {
   public function getMemoryAsFloat()
   {
      return (float)$this->memory;
   }

   public function plus($a, $b) {
      echo "HERE";
   }

   public function clear() { 
      return parent::clear();
   }
}
