<?php
namespace Libs;

class SuperCar extends Car
{
   public function __construct()
   {
      parent::__construct("red");
   }

   public function changeColor() {
     $this->color = "blue";
   }
}
