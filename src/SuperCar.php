<?php
namespace Libs;

final class SuperCar extends Car
{
   public static $usage;

   public function __construct()
   {
      parent::__construct("red");
   }

   public function changeColor() {
     $this->color = "blue";
   }

   public function __destruct() {
      echo "SuperCar was destroyed";
   }
}
